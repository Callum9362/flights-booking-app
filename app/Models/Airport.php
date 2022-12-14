<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $fillable = [
        'airport_name',
        'country',
        'state',
        'city',
        'code'
    ];

    use HasFactory;

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }
}
