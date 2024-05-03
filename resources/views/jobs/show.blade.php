<x-layout>
    <x-slot:title>
        Job Details
    </x-slot:title>

    <div class="block px-4 py-6 border border-gray-200 rounded-lg">
        <span><a href="/jobs" class="font-small text-blue-600 dark:text-blue-500 hover:underline mt-4">🔙</a></span>
        <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
        <div>
            <h2 class="font-bold text-lg">{{ $job->title }}</h2>
            <p>This job pays salary of {{ $job->salary }}</p>
        </div>
    </div>
</x-layout>
