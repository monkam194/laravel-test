@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($properties as $property)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-primary">{{ $property->name }}</h3>
                <p class="mt-2 text-gray-600">{{ Str::limit($property->description, 100) }}</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-lg font-bold">{{ number_format($property->price_per_night, 2) }} €/nuit</span>
                    <a href="#" class="px-4 py-2 bg-secondary text-white rounded hover:bg-secondary-dark transition">
                        Voir
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection