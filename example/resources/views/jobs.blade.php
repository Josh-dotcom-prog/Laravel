<x-layout>
    <x-slot:heading>
        Jobs listing Page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li class="text-blue-500 hover:underline">
                <a href="/jobs/{{ $job['id']}}">
                    <strong>{{ $job['title']}}</strong> pays {{ $job['salary']}} per month
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>