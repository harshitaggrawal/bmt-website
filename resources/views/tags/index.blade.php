@extends('layout.admin')

@section('content')
<main class="flex-1 p-6 ">
    <div class="bg-gray-800 p-5 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Tags</h1>
        <a href="{{ route('tags.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Tag</a>

        <table class="w-full mt-4 border border-gray-700">
            <thead>
                <tr class="bg-gray-700">
                    <th class="p-2">Keyword</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                <tr class="border-t border-gray-700">
                    <td class="p-2">{{ $tag->keyword }}</td>
                    <td class="p-2">
                        <a href="{{ route('tags.edit', $tag->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                        <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
    @endsection