<x-layout >
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Lets Find your next job!</h1>
            <p class="mt-2 mb-4">Pixel Positions is a job board for remote jobs. We help you find the best remote jobs for you.</p>

            <x-forms.form action="/search">
                <x-forms.input name="q" placeholder="Search jobs..." :label=false />
            </x-forms.form>
        </section>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8">
                @foreach ($featuredJobs as $job)
                    <x-jobcard :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach

            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-jobcard-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
