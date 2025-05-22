@props([
    'job',
])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="/company/1" class="self-start text-sm text-gray-700">
            {{ $job->employer->name }}
        </a>

            <h3 class="font-bold text-lg
            group-hover:text-blue-800
            transition-colors duration-300
            ">{{ $job->title }}</h3>
            {{-- <p>Remote</p> --}}
            <p class="text-sm text-gray-700 mt-auto">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>

    </div>


</x-panel>
