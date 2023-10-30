@props(['listing'])

<x-card class="bg-secondary">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$listing->img ? asset('storage/' . $listing->img) :  asset('/images/no-image.png')}}" alt="this should display at least something" />
        {{-- <img class="hidden w-48 mr-6 md:block" src="{{$listing->img ? asset('./storage/app/images/OJbpd6kn5COKgw5OtFFZZXJu3q6vi18mhbx8JhrR.jpg') :  asset('/images/no-image.png')}}" alt="this should display at least something" /> --}}
        <div>
            <h3 class="text-2xl">
                <a href="listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->description }}</div>

            <x-listing-tags :tagsCsv="$listing->tags"> </x-listing-tags>
            
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->brand }}
            </div>
        </div>
    </div>
</x-card>
