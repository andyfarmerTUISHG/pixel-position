<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken mb-8">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4
        border-b border-white/10
        ">
            <div>
                <a href="/">
                    <img
                        src="{{ Vite::asset('resources/images/logo.svg') }}"
                        alt="Pixel Positions"
                        />
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="/careers">Careers</a>
                <a href="/salaries">Salaries</a>
                <a href="/companies">Companies</a>
            </div>

                <div class="space-x-6 font-bold">
                @auth
                    <a href="/jobs/create">Post a Job</a>
                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white rounded px-4 py-2 hover:bg-red-600 transition-colors duration-300 cursor-pointer">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                @endguest
                </div>

        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
</body>
</html>
