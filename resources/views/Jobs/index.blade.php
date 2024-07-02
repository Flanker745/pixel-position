<x-layout>
    <section>
        <div>
            <h1 class="text-[40px] text-center mt-3 font-semibold">Let's find A Great Job</h1>
        </div>
        <form action="/search">
            <div
                class="w-1/2 flex items-center justify-between m-auto bg-neutral-700 border border-neutral-500 px-4 rounded-md py-1 text-[18px] mt-3 ">
                <input placeholder="I am looking for..." class="  bg-transparent focus:outline-none  w-full"
                    type="text" name="s">
                <x-checkBox></x-checkBox>
            </div>
        </form>
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
</x-layout>
