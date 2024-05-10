<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <x-form-field>
                    <x-form-label for="first_name">First Name</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="first_name" id="first_name" placeholder="e.g. John" />
                        <x-form-error name="first_name" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="last_name">Last Name</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="last_name" id="last_name" placeholder="e.g. Doe" />
                        <x-form-error name="last_name" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="email" id="email" type="email" placeholder="e.g. john@gmail.com" />
                        <x-form-error name="email" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="password" id="password" type="password" placeholder="e.g. 123456789" />
                        <x-form-error name="password" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="password_confirmation" id="password_confirmation" type="password" placeholder="e.g. 123456789" />
                        <x-form-error name="password_confirmation" />
                    </div>
                </x-form-field>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
