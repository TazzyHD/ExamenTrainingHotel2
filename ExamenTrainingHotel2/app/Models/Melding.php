<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class melding extends Model
{
    protected $fillable = [
        'kamer_id',
        'titel',
        'prioriteit',
        'gerapporteerd_op',
    ];


    protected $casts = [
        'gerapporteerd_op' => 'date',
    ];

    public function kamer()
    {
        return $this->belongsTo(kamer::class);
    }
}
