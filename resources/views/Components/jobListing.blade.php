@props(['job'])
<div
    class="bg-neutral-950 rounded-lg flex gap-5 p-3 border border-neutral-700 hover:border-blue-700  duration-300 group">
    <div class="p-2 rounded-lg bg-white h-fit">
        <div class="">
            <x-employer-logo :width="90"></x-employer-logo>
        </div>
    </div>
    <div class="w-full">
        <div class="flex justify-between">
            <span class="text-xs text-neutral-600 font-semibold">{{ $job->employer->name }}</span>
            <div class="flex gap-4">
                <x-bg>{{ $job->location }} </x-bg>
                <x-bg>{{ $job->workTime }}</x-bg>
            </div>
        </div>
        <div class="text-xl group-hover:text-blue-700  duration-300 min-h-[50px] w-[80%]  font-semibold ">
            <p>{{ $job->title }}</p>
        </div>
        <div class= "flex justify-between">
            <div class="text-xs text-neutral-600  font-semibold">
                <p>{{ $job->schedule }} - From {{ $job->salary }}</p>
            </div>
            <div class="flex gap-4">
                @foreach ($job->tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </div>
    </div>
</div>
