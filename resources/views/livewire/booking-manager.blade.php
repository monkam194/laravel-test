@php
    $properties = [
        [
            'title' => 'Villa Moderne avec Vue sur Mer',
            'location' => 'Nice, France',
            'description' => 'Magnifique villa moderne avec vue panoramique sur la mer Méditerranée',
            'image' => 'images/villa.jpg',
            'bedrooms' => 4,
            'bathrooms' => 3,
            'price' => 250
        ],
        [
            'title' => 'Appartement au Cœur de Paris',
            'location' => 'Paris, France',
            'description' => 'Charmant appartement haussmannien proche des Champs-Élysées',
            'image' => 'images/appartement.jpg',
            'bedrooms' => 2,
            'bathrooms' => 1,
            'price' => 180
        ],
        [
            'title' => 'Chalet Alpin',
            'location' => 'Chamonix, France',
            'description' => 'Chalet traditionnel avec vue sur les montagnes',
            'image' => 'images/chalet.jpg',
            'bedrooms' => 5,
            'bathrooms' => 4,
            'price' => 300
        ],
    ];
@endphp

<div class="container mx-auto px-4 py-8">
    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
        @foreach($properties as $property)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset($property['image']) }}" alt="{{ $property['title'] }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">{{ $property['title'] }}</h3>
                    <p class="text-gray-600 flex items-center mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 2a6 6 0 00-6 6c0 4.418 6 10 6 10s6-5.582 6-10a6 6 0 00-6-6zM8 8a2 2 0 114 0 2 2 0 01-4 0z" clip-rule="evenodd" />
                        </svg>
                        {{ $property['location'] }}
                    </p>
                    <p class="text-gray-500 mt-2">{{ $property['description'] }}</p>
                    <div class="flex items-center justify-between mt-4 text-gray-700">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M4 10h12M4 14h12M4 6h12" />
                            </svg>
                            <span>{{ $property['bedrooms'] }}</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 3a1 1 0 011-1h6a1 1 0 011 1v3h-2V4H8v2H6V3z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M4 9a1 1 0 011-1h10a1 1 0 011 1v6a1 1 0 01-1 1h-2v-2H6v2H4a1 1 0 01-1-1V9z" clip-rule="evenodd" />
                            </svg>
                            <span>{{ $property['bathrooms'] }}</span>
                        </div>
                        <span class="font-bold text-lg">€ {{ $property['price'] }}/nuit</span>
                    </div>
                    <button wire:click="book({{ $loop->index }})" class="mt-4 w-full text-white py-2 rounded-lg text-center transition" style="background-color: red;">
                        Réserver
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>


