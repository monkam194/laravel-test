<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Property; // Assure-toi que ce modèle existe

class BookingManager extends Component
{
    public function render()
    {
        $properties = Property::all(); // Récupère les propriétés de la base de données
        return view('livewire.booking-manager', compact('properties'));
    }

    public function book($propertyId)
    {
        // Logique de réservation (à compléter)
        session()->flash('message', 'Réservation effectuée avec succès !');
    }
}

