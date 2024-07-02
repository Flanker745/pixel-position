<x-layout>
    <h3 class="text-[35px] bg-transparent font-semibold text-center py-3">Result</h3>
    <div class="space-y-5 w-3/4 m-auto">
        @foreach ($jobs as $job)
            <x-jobListing :$job />
        @endforeach
    </div>
</x-layout>