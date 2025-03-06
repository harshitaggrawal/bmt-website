
@extends('layout.admin')

@section('content')
<main class="flex-1 p-6 ">
            <div class="bg-gray-800 p-5 rounded shadow">
            <div class="flex justify-between gap-8">
                <h1 class="text-2xl font-bold">Blogs</h1>
                
                <a href="{{ route('blogs.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Blog</a>
                </div>
                <div class="mt-5">
                    <table class="w-full border border-gray-700">
                        <thead>
                            <tr class="bg-gray-700">
                                <th class="p-2">Posted Date</th>
                                <th class="p-2">Outer Image</th>
                                <th class="p-2">Title</th>
                                <th class="p-2">Short Description</th>
                                <th class="p-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $index => $blog)
                                <tr class="{{ $index % 2 == 0 ? 'bg-gray-800' : 'bg-gray-700' }}">
                                <td class="p-2">{{ $blog->date_of_post }}</td>
                                    <td class="p-2 text-center">
                                        <img src="{{ asset('storage/' . $blog->outer_image) }}" class="w-12 h-12 object-cover rounded">
                                    </td>
                                    <td class="p-2">{{ $blog->title }}</td>
                                    <td class="p-2">{{ $blog->short_description }}</td>
                                    <td class="p-2">
                                        <a href="{{ route('blogs.edit', $blog->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="inline-block">
                                            @csrf @method('DELETE')
                                            <button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
@endsection
