


@extends('layout.admin')

@section('content')

<main class="flex-1 p-6">
            <div class="bg-gray-800 p-5 rounded shadow">
                <h2 class="text-2xl font-bold">Contact Messages</h2>
                <table class="w-full mt-5 border border-gray-700">
                    <thead>
                        <tr class="bg-gray-700">
                            <th class="p-2">Name</th>
                            <th class="p-2">Email</th>
                            <th class="p-2">Phone</th>
                            <th class="p-2">Service</th>
                            <th class="p-2">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $index => $contact)
                            <tr class="{{ $index % 2 == 0 ? 'bg-gray-800' : 'bg-gray-700' }} border-b border-gray-700">
                                <td class="p-2">{{ $contact->name }}</td>
                                <td class="p-2">{{ $contact->email }}</td>
                                <td class="p-2">{{ $contact->phone }}</td>
                                <td class="p-2">{{ $contact->service }}</td>
                                <td class="p-2">{{ $contact->message }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
@endsection