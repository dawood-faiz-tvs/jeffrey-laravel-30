<x-layout>
    <x-slot:title>
        Jobs
    </x-slot:title>

    <ul>
        @foreach ($jobs as $job)
        <li class="bg-purple-100 px-3 py-6 my-2">
            <a href="/jobs/{{ $job['id'] }}" class="font-small text-blue-600 dark:text-blue-500 hover:underline mt-4">
                <strong>{{ $job['title'] }}: </strong>pays salary of {{ $job['salary'] }}
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>
