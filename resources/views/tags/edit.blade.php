@extends('layout.admin')

@section('content')
<main class="flex-1 p-6 ">
            <div class="bg-gray-800 p-5 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Edit Tag</h1>

    <form action="{{ route('tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label class="block">Keyword</label>
        <input type="text" name="keyword" value="{{ $tag->keyword }}" required class="bg-gray-700 p-2 rounded w-full text-white">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 mt-3 rounded">Update</button>
    </form>
</div>
</main>
@endsection
