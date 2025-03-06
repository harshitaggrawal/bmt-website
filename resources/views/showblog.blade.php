@extends('layout.app')

@section('meta')
    <title>{{ $blog->meta_title }}</title>
    <meta name="description" content="{{ $blog->meta_description }}">
    <meta name="keywords" content="{{ $blog->meta_keywords }}">
    <meta name="author" content="{{ $blog->author }}">
@endsection
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

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

<div class="bg-white w-full px-[9%] py-12">

    <h1 class="text-xl md:text-3xl font-bold w-full md:w-3/5 mb-4">{{ $blog->title }}</h1>

    <div class="flex flex-wrap my-8 mb-4 text-gray-700 justify-start gap-2 items-center">
        <p><i class="fas fa-user"></i></p>
        <p>By {{ $blog->author }} |</p>
        <p>Published on <span id="formattedDate" data-date="{{ $blog->date_of_post }}"></span> | 5 min read</p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let dateElement = document.getElementById("formattedDate");
            let rawDate = dateElement.getAttribute("data-date");

            if (rawDate) {
                let date = new Date(rawDate);
                let options = {
                    day: '2-digit',
                    month: 'long',
                    year: 'numeric'
                };
                dateElement.textContent = date.toLocaleDateString('en-US', options);
            }
        });
    </script>


    <img src="{{ asset('storage/' . $blog->inner_image) }}"
        class="min-h-full w-full h-[400px] object-cover" alt="">

    <p class="my-4">{{ $blog->short_description }}</p>
    <div class="mb-4">
    {!! $blog->long_description !!}
</div>

    <div class="flex flex-wrap gap-2 my-4">
        @foreach($blog->tags as $tag)
        <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">
            {{ $tag->keyword }}
        </span>
        @endforeach
    </div>
</div>
@endsection