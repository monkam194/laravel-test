<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * Les attributs remplissables (mass assignable)
     */
    protected $fillable = [
        'name',
        'description', 
        'price_per_night',
        'address',
        'capacity',
        'amenities',
        'is_available'
    ];

    /**
     * Les casts de type pour les attributs
     */
    protected $casts = [
        'amenities' => 'array',
        'is_available' => 'boolean',
        'price_per_night' => 'decimal:2'
    ];

    /**
     * Relation avec les réservations
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}