<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>
    
    <ul class="space-y-5">
        @foreach ($jobs as $job)
            <li><b><a href="/jobs/{{ $job['id'] }}" class="hover:text-gray-700">{{ $job['title'] }}:</a></b> pays {{ $job['salary'] }} per year.</li>
        @endforeach
    </ul>
</x-layout>