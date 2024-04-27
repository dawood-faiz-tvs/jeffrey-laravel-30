<x-layout>
    <x-slot:title>
        Job Details
    </x-slot:title>

    <div class="bg-purple-100 px-3 py-6">
        <span><a href="/jobs" class="font-small text-blue-600 dark:text-blue-500 hover:underline mt-4">🔙</a></span>
        <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
        <p>This job pays salary of {{ $job['salary'] }}</p>
    </div>
</x-layout>
