<x-layout>
    <x-slot:heading>
        Jobs listing Page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name ?? 'No Employer Listed'}}</div>
                <div>
                    <strong class="text-laracast">{{ $job['title']}}</strong> pays {{ $job['salary']}} per month
                </div>
            </a>
        @endforeach
    </div>

    <div class="py-4">
        {{ $jobs->links() }}
    </div>
</x-layout>