<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="ie=edge" http-equiv="X-UA-Compatible">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
            rel="stylesheet">
        <title>Document</title>
    </head>

    <body class="bg-black text-white font-hanken-grotesk">
        <div class="px-10">
            <nav class="flex justify-between items-center border-b border-white/10">
                <div>
                    <a href="">
                        <img alt="" src="{{ Vite::asset('resources/images/logo.svg') }}">
                    </a>
                </div>
                <div class="sapce-x-6 font-bold">
                    <a href="">Jobs</a>
                    <a href="">Careers</a>
                    <a href="">Salaries</a>
                    <a href="">Companies</a>
                </div>
                <div>
                    <a href="">Post a Job</a>
                </div>
            </nav>
            <main class="mt-10 max-w-[986px] mx-auto">
                {{ $slot }}
            </main>
        </div>
    </body>

</html>
