<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <div class="flex h-screen">
       
        <aside class="w-64 bg-gray-800 p-5">
            <h2 class="text-xl font-bold mb-5">Admin Panel</h2>
            <nav>
                <ul>
                    <li class="mb-2"><a href="/admin/contacts" class="block p-2 bg-gray-700 rounded">Contact Queries</a></li>
                    <li class="mb-2"><a href="/admin/blogs" class="block p-2 bg-gray-700 rounded">Blogs</a></li>
                    <li><a href="{{ route('tags.index') }}" class="block p-2 bg-gray-700 rounded">Tags</a></li>
                </ul>
            </nav>
        </aside>

       
        @yield('content')
    </div>
</body>
</html>
