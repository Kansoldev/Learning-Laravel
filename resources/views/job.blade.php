<x-layout>
    <x-slot:heading>{{ $job['title'] }} job</x-slot:heading>
    
    <ul>
        <li><b>Job title:</b> {{ $job['title'] }}</li>
        <li><b>Salary:</b> {{ $job['salary'] }} per year</li>
    </ul>
</x-layout>