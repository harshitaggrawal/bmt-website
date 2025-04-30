
@php
    use App\Models\Blog;
    $blogs = Blog::latest()->take(3)->get();
@endphp

<div class="bg-white w-full px-[9%] py-12">
<h2 class="text-[#FE6D00] font-[900] md:text-[24px] text-center mb-[2px]"><i>From the Blogs</i></h2>
        <h2 class="text-2xl md:text-4xl text-black font-bold text-center mb-4">
            Latest Blogs
        </h2>
    <div class="w-full">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            @foreach($blogs as $blog)
            <div class="py-4">
                <img src="{{ asset('storage/' . $blog->inner_image) }}" class="w-full h-auto rounded object-contain">

                <div class="flex items-center justify-start mx-6 mb-2 relative">
                    <p class="absolute -translate-y-8  bg-[#FE6D00] text-white px-4 py-1 rounded-lg transition">
                        {{ $blog->date_of_post }}
                    </p>
                </div>
                <div class="flex gap-8 mt-8 mb-4 items-center">
                    <p class="text-gray-600 text-sm"><i class="fa fa-user text-[#FE6D00]" aria-hidden="true"></i> By {{ $blog->author }}</p>
                    <p class="text-gray-600 text-sm"><i class="fa fa-comment text-[#FE6D00]" aria-hidden="true"></i> 3 comment</p>
                </div>
                <h2 class="text-xl font-bold">{{ $blog->title }}</h2>
                <p class="text-gray-700 mt-4">{{ $blog->short_description}}</p>
                <a href="{{ route('blog.show', ltrim($blog->post_url, '/')) }}" class="text-gray-800 font-semibold mt-8 inline-block">Read More</a>
                 </div>
            @endforeach
        </div>
       
    </div>
</div>