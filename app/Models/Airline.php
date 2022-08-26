<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $fillable = [
        'airline_code',
        'airline_name',
        'airline_country'
    ];

    use HasFactory;
}
