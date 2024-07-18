<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

@foreach ($jobs as $job)
    <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
     <li><strong>{{ $job['title'] }}: </strong> Pays {{ $job['salary'] }} per year.</li>
    </a>
@endforeach
</x-layout>
