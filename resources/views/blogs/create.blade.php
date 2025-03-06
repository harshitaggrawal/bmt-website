@extends('layout.admin')

@section('content')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<main class="flex-1 p-6">
    <div class="bg-gray-800 p-5 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Add Blog</h1>

        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="mt-5 space-y-4">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block font-semibold">Author Name</label>
                    <input type="text" name="author" required class="bg-gray-700 p-2 rounded w-full text-white">
                </div>
                <div>
                    <label class="block font-semibold">Posted Date</label>
                    <input type="date" name="date_of_post" required class="bg-gray-700 p-2 rounded w-full text-white">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="w-full">
                    <label class="block font-semibold">Outer Image</label>
                    <div class="w-full h-32 bg-gray-700 flex items-center justify-center rounded cursor-pointer" onclick="document.getElementById('outer_image').click()">
                        <img id="outer_image_preview" class="w-full h-full object-cover rounded hidden">
                        <span class="text-gray-400">Click to Upload</span>
                    </div>
                    <input type="file" id="outer_image" name="outer_image" class="hidden" onchange="previewImage(event, 'outer_image_preview')">
                </div>
                <div class="w-full">
                    <label class="block font-semibold">Inner Image</label>
                    <div class="w-full h-32 bg-gray-700 flex items-center justify-center rounded cursor-pointer" onclick="document.getElementById('inner_image').click()">
                        <img id="inner_image_preview" class="w-full h-full object-cover rounded hidden">
                        <span class="text-gray-400">Click to Upload</span>
                    </div>
                    <input type="file" id="inner_image" name="inner_image" class="hidden" onchange="previewImage(event, 'inner_image_preview')">
                </div>
            </div>

            <div class="mb-4">
                <label class="block font-semibold">Title</label>
                <input type="text" name="title" required class="bg-gray-700 p-2 rounded w-full text-white">
            </div>

            <div class="mb-4">
                <label class="block font-semibold">Post URL (ex: /url)</label>
                <input type="text" name="post_url" required class="bg-gray-700 p-2 rounded w-full text-white">
            </div>

            <div class="mb-4">
                <label class="block font-semibold">Meta Title</label>
                <input type="text" name="meta_title" class="bg-gray-700 p-2 rounded w-full text-white">
            </div>
            <div class="mb-4">
                <label class="block font-semibold">Meta Keywords</label>
                <input type="text" name="meta_keywords" 
                    class="bg-gray-700 p-2 rounded w-full text-white" placeholder="Enter keywords, separated by commas">
            </div>

            <div class="mb-4">
                <label class="block font-semibold">Meta Description</label>
                <textarea name="meta_description" class="bg-gray-700 p-2 rounded w-full text-white"></textarea>
            </div>

            <div class="mb-4">
                <label class="block font-semibold">Tags</label>
                <div class="grid grid-cols-5 gap-2">
                    @foreach($tags as $tag)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="bg-gray-700 rounded">
                        <span>{{ $tag->keyword }}</span>
                    </label>
                    @endforeach
                </div>
            </div>

            <div class="mb-4">
                <label class="block font-semibold">Short Description</label>
                <textarea name="short_description" required class="bg-gray-700 p-2 rounded w-full text-white"></textarea>
            </div>

            <div class="mb-4">
                <label class="block font-semibold">Long Description</label>
                <textarea name="long_description" id="editor" required class="bg-gray-700 p-2 rounded w-full text-white"></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
</main>

<script>
    function previewImage(event, previewId) {
        const reader = new FileReader();
        reader.onload = function() {
            document.getElementById(previewId).src = reader.result;
            document.getElementById(previewId).classList.remove('hidden');
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    CKEDITOR.replace('editor');
</script>
@endsection