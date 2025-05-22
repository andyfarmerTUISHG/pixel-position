<x-layout >
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Lets Find your next job!</h1>
            <p>Pixel Positions is a job board for remote jobs. We help you find the best remote jobs for you.</p>
            <form action="" class="mt-6">
                <input type="text" placeholder="Search jobs..."
                class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl"
                >
            </form>
        </section>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8">
                <x-jobcard />
                <x-jobcard />
                <x-jobcard />
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-jobcard-wide />
                <x-jobcard-wide />
                <x-jobcard-wide />
            </div>
        </section>
    </div>
</x-layout>
