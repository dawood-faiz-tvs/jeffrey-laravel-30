<x-layout>
    <x-slot:title>
        Create Job
    </x-slot:title>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Job Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Please fill out the form to create a job.</p>
                <x-form-field>
                    <x-form-label for="title">Title</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="title" id="title" placeholder="e.g. CEO" />
                        <x-form-error name="title" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="salary">Salary</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="salary" id="salary" placeholder="e.g. 50,000 USD" />
                        <x-form-error name="salary" />
                    </div>
                </x-form-field>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>
