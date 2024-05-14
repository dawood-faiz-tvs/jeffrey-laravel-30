<x-layout>
    <x-slot:title>
        Job Details
    </x-slot:title>

    <div class="block px-4 py-6 border border-gray-200 rounded-lg">
        <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
        <h2 class="font-bold text-lg">{{ $job->title }}</h2>
        <p>This job pays salary of {{ $job->salary }}</p>

        <p class="mt-6">
            <x-button href="/jobs">Go Back</x-button>

            @can('edit', $job)
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
            @endcan
        </p>
    </div>
</x-layout>
