<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservering extends Model
{
    protected $fillable = [
        'kamer_id',
        'gast_naam',
        'email',
        'Telefoon',
        'check_in',
        'check_out',
        'speciale_verzoeken',
    ];

    protected $casts = [
        'check_in' => 'date',
        'check_out' => 'date',
    ];
}
