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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Boldonse&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="r-s-s  w-screen h-screen  ">

        <div class="c-b-c py-4 border w-2/12  h-full  bg-blue-900">
            <h1 class="font-bold m-2 mt-10 text-white drop-shadow" style="font-family:   'Boldonse', system-ui;">
                KratritLivres
            </h1>

            <div class="c-c-s ">
                <a href="{{url("/livres")}}" class="w-full text-white  mb-4 p-2 rounded-2xl  font-semibold r-s-c">
                    <svg class="stroke-white stroke-2 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" strokelinecap="round" strokelinejoin="round" width={20}
                        height={20} strokeWidth={1.25}>
                        <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path>
                        <path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
                        <path d="M9 8h6"></path>
                    </svg> CRUD livres
                </a>
                <a href="" class="w-full text-white  mb-4 p-2 rounded-2xl  font-semibold r-s-c">
                    <svg class="stroke-white stroke-2 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" strokelinecap="round" strokelinejoin="round" width={20}
                        height={20} strokeWidth={1.25}>
                        <path d="M14 4h6v6h-6z"></path>
                        <path d="M4 14h6v6h-6z"></path>
                        <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    </svg>
                    CRUD categories
                </a>
                <a href="" class="w-full text-white  mb-4 p-2 rounded-2xl  font-semibold r-s-c">
                    <svg class="fill-white mr-2" xmlns="http://www.w3.org/2000/svg" height="24px"
                        viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                        <path
                            d="M517-518 347-688l57-56 113 113 227-226 56 56-283 283ZM280-220l278 76 238-74q-5-9-14.5-15.5T760-240H558q-27 0-43-2t-33-8l-93-31 22-78 81 27q17 5 40 8t68 4q0-11-6.5-21T578-354l-234-86h-64v220ZM40-80v-440h304q7 0 14 1.5t13 3.5l235 87q33 12 53.5 42t20.5 66h80q50 0 85 33t35 87v40L560-60l-280-78v58H40Zm80-80h80v-280h-80v280Z" />
                    </svg>
                    CRUD Location</a>
                <a href="" class="w-full text-white  mb-4 p-2 rounded-2xl  font-semibold r-s-c">
                    <svg class="stroke-white stroke-2 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" strokelinecap="round" strokelinejoin="round" width={20}
                        height={20} strokeWidth={1.25}>
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h2.5"></path>
                        <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                        <path d="M19.001 15.5v1.5"></path>
                        <path d="M19.001 21v1.5"></path>
                        <path d="M22.032 17.25l-1.299 .75"></path>
                        <path d="M17.27 20l-1.3 .75"></path>
                        <path d="M15.97 17.25l1.3 .75"></path>
                        <path d="M20.733 20l1.3 .75"></path>
                    </svg>
                    CRUD utilisateurs
                </a>
                <a href="" class="w-full text-white  mb-4 p-2 rounded-2xl  font-semibold r-s-c">
                    <svg class="fill-white mr-2" xmlns="http://www.w3.org/2000/svg" height="24px"
                        viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                        <path
                            d="M640-240v-80h104L536-526 376-366 80-664l56-56 240 240 160-160 264 264v-104h80v240H640Z" />
                    </svg>
                    Stock faible
                </a>
            </div>

            <a href="" class="r-c-c text-white">Deconneter 
                <svg class="fill-white ml-2" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
            </a>
        </div>

        <div class="w-full h-full c-s-s ">
            <div class="w-full  r-b-c  p-2 ">
                <div class="r-s-c p-2 px-3 rounded-3xl drop-shadow bg-white border border-gray-300">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" strokelinecap="round" strokelinejoin="round" width={20} height={20}
                        strokeWidth={1.25}>
                        <path d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3"></path>
                        <path d="M4 6v6c0 1.657 3.582 3 8 3m8 -3.5v-5.5"></path>
                        <path d="M4 12v6c0 1.657 3.582 3 8 3"></path>
                        <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M20.2 20.2l1.8 1.8"></path>
                    </svg>
                    <input type="text" class="w-[400px] outline-none" placeholder="search  for products ...">
                </div>

                <div class="r-s-c">
                    <button class="border rounded-xl border-gray-300 p-2">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" width="20"
                            height="20" stroke-width="1.25" stroke-linejoin="round" stroke-linecap="round"
                            stroke="currentColor">
                            <path
                                d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                            </path>
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                        </svg>
                    </button>
                    <span class="r-c-c ml-4">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            strokelinecap="round" strokelinejoin="round" width={20} height={20} strokeWidth={1.25}>
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        </svg>
                        <h1>Mustapha iderkaoui</h1>
                    </span>
                </div>
            </div>

            <div class="border w-full h-full max-h-full overflow-auto r-c-S">
                @yield('content')
            </div>
        </div>

    </div>

</body>

</html>
