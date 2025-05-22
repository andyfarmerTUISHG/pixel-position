<x-layout>
    <x-page-heading>Search Results</x-page-heading>
    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
            <x-jobcard-wide :$job />
        @endforeach
    </div>
</x-layout>
