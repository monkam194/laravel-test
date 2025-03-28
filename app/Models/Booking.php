<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * Les attributs remplissables
     */
    protected $fillable = [
        'user_id',
        'property_id',
        'start_date',
        'end_date',
        'total_price',
        'status',
        'special_requests'
    ];

    /**
     * Les casts de type
     */
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'total_price' => 'decimal:2'
    ];

    /**
     * Relation avec la propriété
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    /**
     * Relation avec l'utilisateur
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}