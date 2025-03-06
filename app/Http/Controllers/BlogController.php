<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Tag;

class BlogController extends Controller
{

    public function home(Request $request)
    {
        // Get all tags for the filter section
        $tags = Tag::all();

        // Get query parameters
        $search = $request->input('search');
        $tag_id = $request->input('tag');
        $year = $request->input('year');
        $month = $request->input('month');

        // Start the query
        $query = Blog::query();

        // Search by title
        if (!empty($search)) {
            $query->where('title', 'like', "%$search%");
        }

        // Filter by tag


        if ($request->has('tags')) {
            $query->whereHas('tags', function ($q) use ($request) {
                $q->whereIn('tags.id', $request->tags);
            });
        }



        // Get paginated results
        $blogs = $query->latest()->paginate(3);

        // Get years for filtering
        $years = Blog::selectRaw('YEAR(date_of_post) as year')->distinct()->orderBy('year', 'desc')->pluck('year');

        return view('allblogs', compact('blogs', 'tags', 'years', 'search', 'tag_id', 'year', 'month'));
    }

    public function getBlog($post_url)
    {
        // dd($post_url);
        $blog = Blog::where('post_url', "/".$post_url)->firstOrFail();
        // dd($blog);
        return view('showblog', compact('blog'));
    }


    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        $tags = Tag::all(); // Fetch all available tags
        return view('blogs.create', compact('tags'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'outer_image' => 'required|image|mimes:jpeg,png,jpg',
            'inner_image' => 'required|image|mimes:jpeg,png,jpg',
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'author' => 'required|string|max:100',
            'date_of_post' => 'required|date',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'meta_title' => 'nullable|string|max:255',
            'post_url' => 'required|string|unique:blogs,post_url',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);


        $outerImagePath = $request->file('outer_image')->store('blogs', 'public');
        $innerImagePath = $request->file('inner_image')->store('blogs', 'public');

        $blog = Blog::create([
            'outer_image' => $outerImagePath,
            'inner_image' => $innerImagePath,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'author' => $request->author,
            'date_of_post' => $request->date_of_post,
            'meta_title' => $request->meta_title,
            'post_url' => $request->post_url,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        // dd($blog);
        if ($request->has('tags')) {
            $blog->tags()->attach($request->tags);
        }

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        $tags = Tag::all();
        $selectedTags = $blog->tags->pluck('id')->toArray();
        return view('blogs.edit', compact('blog', 'tags', 'selectedTags'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'outer_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'inner_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'author' => 'required|string|max:100',
            'date_of_post' => 'required|date',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'meta_title' => 'nullable|string|max:255',
            'post_url' => 'required|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',

        ]);

        if ($request->hasFile('outer_image')) {
            Storage::delete('public/' . $blog->outer_image);
            $blog->outer_image = $request->file('outer_image')->store('blogs', 'public');
        }
        if ($request->hasFile('inner_image')) {
            Storage::delete('public/' . $blog->inner_image);
            $blog->inner_image = $request->file('inner_image')->store('blogs', 'public');
        }

        $blog->update($request->except(['outer_image', 'inner_image', 'tags']) + [
            'outer_image' => $blog->outer_image,
            'inner_image' => $blog->inner_image,
        ]);

        // Sync tags (attach new ones, remove old ones)
        if ($request->has('tags')) {
            $blog->tags()->sync($request->tags);
        } else {
            $blog->tags()->detach(); // Remove all tags if none selected
        }

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog moved to trash.');
    }

    public function restore($id)
    {
        Blog::withTrashed()->where('id', $id)->restore();
        return redirect()->route('blogs.index')->with('success', 'Blog restored successfully.');
    }

    public function forceDelete($id)
    {
        $blog = Blog::withTrashed()->find($id);

        // Detach all associated tags before deletion
        $blog->tags()->detach();

        Storage::delete('public/' . $blog->outer_image);
        Storage::delete('public/' . $blog->inner_image);
        $blog->forceDelete();

        return redirect()->route('blogs.index')->with('success', 'Blog permanently deleted.');
    }
}
