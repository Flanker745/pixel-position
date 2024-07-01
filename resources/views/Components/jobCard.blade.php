@props(['job'])
<div
    class=" border   bg-neutral-900 p-3 space-y-5 rounded-xl border-neutral-700 hover:border-blue-700 group duration-300">
    <span class="text-xs text-neutral-400">{{ $job->employer->name }}</span>
    <p class="text-xl text-center font-semibold m-auto w-[90%] group-hover:text-blue-700 duration-300">{{ $job->title }}</p>
    <p class="text-sm text-neutral-300 text-center font-semibold m-auto w-[90%]">{{ $job->salary }}</p>
    <div class=" flex items-center justify-between">
        <div class="w-10/12 gap-2 flex flex-wrap">
            @foreach ($job->tags as $tag )
            <x-tag :$tag size="small"/>
            @endforeach
        </div>
        <div class="w-2/12 ">
            <x-employer-logo :width="42"></x-employer-logo>
        </div>
    </div>
</div>
