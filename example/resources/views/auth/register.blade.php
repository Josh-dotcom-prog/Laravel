<x-layout>
    <x-slot:heading>
        Register User
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-lable for="first_name">Firstname</x-form-lable>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" />
                        </div>
                        <x-form-error for="first_name" name="first_name" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-lable for="last_name">Lastname</x-form-lable>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input id="last_name" type="text" name="last_name" />
                            </div>
                            <x-form-error for="last_name" name="last_name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-lable for="email">Email</x-form-lable>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input id="email" type="email" name="email" />
                            </div>
                            <x-form-error for="email" name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-lable for="password">Password</x-form-lable>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input id="password" type="password" name="password" />
                            </div>
                            <x-form-error for="password" name="password" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-lable for="password_confirmation">Confirm Password</x-form-lable>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input id="password_confirmation" type="password" name="password_confirmation" />
                            </div>
                            <x-form-error for="password_confirmation" name="password_confirmation" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href='/' class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>