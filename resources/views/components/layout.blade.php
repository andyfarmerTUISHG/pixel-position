<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div>
        <nav>
            <div>
                <a href="/">
                    <img
                        src="{{ Vite::asset('resources/images/logo.svg') }}"
                        alt="Pixel Positions"
                        />
                </a>
            </div>
            <div>
                <a href="/">Jobs</a>
                <a href="/careers">Careers</a>
                <a href="/salaries">Salaries</a>
                <a href="/companies">Companies</a>
            </div>
            <div>
                <a href="/post-a-job">Post a Job</a>
            </div>
        </nav>
        <main>
            {{ $slot }}
        </main>
</body>
</html>
