<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kamer extends Model
{
    protected $fillable = [
        'kamer_nummer',
        'status',
        'type',
        'laatst_geklaard_op',
    ];

    public function melding()
    {
        return $this->hasMany(Melding::class);
    }
}
