<!DOCTYPE html>
<html lang="en">
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endif

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    <div class="r-s-s  w-screen h-screen  ">
        <div class="c-s-c border w-2/12  h-full bg-blue-400">
            seide bare
        </div>

        <div class="w-full  h-full c-s-s">
            <div class="w-full border p-2 bg-red-500">Header</div>
            <div class=" w-full h-full  max-h-full r-c-c overflow-auto">
                @yield('content')           
            </div>
        </div>

    </div>

</body>

</html>
