<x-layout>
    <x-slot:heading>
        User Login
    </x-slot:heading>
    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
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
                </div>
            </div>
        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href='/' class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <x-form-button>Login</x-form-button>
        </div>
    </form>

</x-layout>