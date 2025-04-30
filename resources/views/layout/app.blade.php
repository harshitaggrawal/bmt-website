<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   @yield('meta')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

@vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FT8MSQCCHF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FT8MSQCCHF');
</script>
</head>



<body>
@include('layout.header')
    @yield('content')
    @include('blogs.blogInclude')
@include('layout.footer')
    @vite('resources/js/app.js')
</body>
</html>