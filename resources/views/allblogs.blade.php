@extends('layout.app')
@section('meta')
    <title>BMT - Blogs</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="canonical" href="https://www.bmt.co.in/blog" />
@endsection
@section('content')
<div class="bg-white">
    <div class="relative w-full h-[350px]">
        <div class="absolute inset-0"></div>
        <img src="{{ asset('assets/image/contactHome.png') }}"
            class="min-h-full w-full h-[350px] object-cover" alt="">
        <div class="absolute inset-0 flex flex-col justify-center w-full md:w-1/2 px-4 w-full pl-[9%]">
            <h1 class="text-2xl md:text-4xl text-white font-bold text-left mb-4">
                Our Latest Blog posts
            </h1>

            <p class="text-white mt-4 font-semibold text-md">
                From concept to creation, we bring your ideas to life with cutting-edge manufacturing expertise.
            </p>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div class="bg-white flex w-full px-[9%] flex-wrap-reverse py-12">

    <div class="w-full lg:w-[70%]">
        <div class="grid grid-cols-1">
            @foreach($blogs as $blog)

            <div class="py-4">
                <img src="{{ asset('storage/' . $blog->outer_image) }}" class="w-full h-auto lg:h-[400px] object-contain">

                <div class="flex items-center justify-start mx-6 mb-2 relative">
                    <p class="absolute -translate-y-8  bg-[#FE6D00] text-white px-4 py-1 rounded-lg transition">
                        {{ $blog->date_of_post }}
                    </p>
                </div>

                <div class="flex gap-8 mt-4 mb-4 items-center">
                    <p class="text-gray-600 text-sm"><i class="fa fa-user text-[#FE6D00]" aria-hidden="true"></i> By {{ $blog->author }}</p>
                    <!-- <p class="text-gray-600 text-sm"><i class="fa fa-comment text-[#FE6D00]" aria-hidden="true"></i> 3 comment</p> -->
                </div>
                <h2 class="text-xl font-bold">{{ $blog->title }}</h2>
                <p class="text-gray-700 mt-4">{{ $blog->short_description}}</p>

                <a href="{{ route('blog.show', ltrim($blog->post_url, '/')) }}" class="text-gray-800 font-semibold mt-8 inline-block">Read More</a>

            </div>
            @endforeach
        </div>
        <div class="mt-6">
            {{ $blogs->links() }}
        </div>
    </div>




    <form method="GET" action="{{ route('home') }}" class="w-full w-full lg:w-[30%] md:p-8 ">
        <div class=" flex flex-col gap-4 mx-auto">

            <div class="search bg-blue-600 rounded-[30px] flex gap-4 px-4 py-1 items-center text-white">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by title"
                    class="w-full outline-0 border-0 p-2 border rounded bg-transparent text-white">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>

            <!-- Year Filter -->
            <div class="bg-gray-50 p-6 rounded-lg shadow hidden lg:block">
                <h2 class="text-lg font-semibold mb-4">Filter by Year</h2>
                <div class="flex flex-wrap gap-3">
                    @foreach($years as $year)
                    <label class="mt-2">
                        <input type="checkbox" name="years[]" value="{{ $year }}" class="hidden"
                            {{ in_array($year, request('years', [])) ? 'checked' : '' }}>
                        <span class="cursor-pointer bg-white px-4 py-2 rounded-lg shadow text-gray-800 font-medium">{{ $year }}</span>
                    </label>
                    @endforeach
                </div>
            </div>



            <div class="bg-gray-50 p-6 rounded-lg shadow hidden md:block">
                <h2 class="text-lg font-semibold mb-4">Tags</h2>
                <div class="flex flex-wrap gap-3">
                    @foreach($tags as $tag)
                    <label class="cursor-pointer mt-2">
                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="hidden"
                            {{ in_array($tag->id, request('tags', [])) ? 'checked' : '' }}>
                        <span class=" bg-white my-2 px-4 py-2 rounded-lg shadow text-gray-800 font-medium">{{ $tag->keyword }}</span>
                    </label>
                    @endforeach
                </div>
            </div>

            <style>
                input[type="checkbox"]:checked+span {
                    border: 2px solid blue;
                }
            </style>
            <!-- <select name="year" class="p-2 border rounded bg-gray-100">
                <option value="">Filter by Year</option>
                @foreach($years as $year)
                <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                    {{ $year }}
                </option>
                @endforeach
            </select> -->

            <!-- <select name="month" class="p-2 border rounded bg-gray-100">
                <option value="">Filter by Month</option>
                @for ($m = 1; $m <= 12; $m++)
                    <option value="{{ $m }}" {{ request('month') == $m ? 'selected' : '' }}>
                    {{ date("F", mktime(0, 0, 0, $m, 1)) }}
                    </option>
                    @endfor
            </select> -->

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Filter</button>
        </div>
    </form>
</div>

@endsection