<!DOCTYPE html>
<html lang="en">
<style>
    .text-2xs {
        font-size: 10px !important;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pixel Position</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css'])
</head>

<body class="bg-black text-white pb-9 font-Hanken-Grotesk">
    <div class="flex items-center p-3 justify-between">
        <div>
            <img src={{ Vite::asset('resources/images/logo.svg') }} alt="">
        </div>
        <nav class="space-x-7">
            <a class="hover:underline" href="#">Jobs</a>
            <a class="hover:underline" href="#">Career</a>
            <a class="hover:underline" href="#">Salaries</a>
            <a class="hover:underline" href="#">Companies</a>
            @auth
                <a href="/jobs" class="hover:underline" href="#">Post a Job</a>
            @endauth
        </nav>
        <div class="flex gap-3">
            @guest
                <x-checkBox><a href="/register">Register</a></x-checkBox>
                <x-checkBox><a href="/login">Login</a></x-checkBox>
            @endguest
            @auth
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button><x-checkBox>Logout</x-checkBox></button>
                </form>
            @endauth
        </div>

    </div>
    {{ $slot }}
</body>

</html>
