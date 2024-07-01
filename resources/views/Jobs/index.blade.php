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
    <x-layout></x-layout>
    <section>
        <div>
            <h1 class="text-[40px] text-center mt-3 font-semibold">Let's find A Great Job</h1>
        </div>
        <div
            class="w-1/2 flex items-center justify-between m-auto bg-neutral-700 border border-neutral-500 px-4 rounded-md py-1 text-[18px] mt-3 ">
            <input placeholder="I am looking for..." class="  bg-transparent focus:outline-none  w-full" type="text">
            <x-checkBox></x-checkBox>
        </div>
    </section>
    <section class="w-3/4 m-auto mt-9 space-y-8">
        <div>
            <x-checkBox>Top jobs</x-checkBox>
        </div>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($featuredJob as $job)
                <x-jobcard :$job />
            @endforeach
        </div>
        <div class="space-y-3">
            <x-checkBox>Tags</x-checkBox>
            <div class=" gap-2  flex flex-wrap">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </div>
        <div class="space-y-3">
            <div class="flex items-center justify-between">
                <x-checkBox>Find Jobs</x-checkBox>
                <div>

                    <x-bg><i class="fa-solid text-2xs fa-sort"></i></x-bg>
                    <x-bg>Filter</x-bg>
                </div>
            </div>
            <div class="space-y-5">
                @foreach ($jobs as $job)
                    <x-jobListing :$job />
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>
