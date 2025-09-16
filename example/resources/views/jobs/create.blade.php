<x-layout>
  <x-slot:heading>
    Create Job
  </x-slot:heading>
  <form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Create a new Job</h2>
        <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-lable for="title">Title</x-form-lable>
            <div class="mt-2">
              <x-form-input placeholder="CEO" name="title" id="title" />
            </div>
            <x-form-error for="title" name="title" />
        </div>

        <x-form-field>
          <x-form-lable for="salary">Salary</x-form-lable>
          <div class="mt-2">
            <div
              class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <x-form-input id="salary" type="text" name="salary" placeholder="$50,000" />
            </div>
            <x-form-error for="salary" name="salary" />
          </div>
        </x-form-field>
        </x-form-field>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
      <x-form-button>Save</x-form-button>
    </div>
  </form>

</x-layout>