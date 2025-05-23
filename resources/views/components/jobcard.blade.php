@props([
    'job',
])

<x-panel class="flex flex-col text-center">


    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8 ">
        <h3 class="group-hover:text-blue-800 text-xl font-bold
        transition-colors duration-300">{{ $job->title }}</h3>
        <p>Remote</p>
        <p class="text-sm text-gray-700 mt-auto">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" width="42" />

    </div>
    {{-- <div>
        <a href="/job/1" class="text-tiny">Apply</a>
    </div> --}}

</x-panel>
