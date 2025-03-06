@extends('layout.admin')

@section('content')
<main class="flex-1 p-6 ">
            <div class="bg-gray-800 p-5 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Add Tag</h1>

    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <label class="block">Keyword</label>
        <input type="text" name="keyword" required class="bg-gray-700 p-2 rounded w-full text-white">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-3 rounded">Submit</button>
    </form>
</div>
</main>
@endsection
