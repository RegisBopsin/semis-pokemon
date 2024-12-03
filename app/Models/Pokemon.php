<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
    'name',
    'type',
    'power',
    'coach_id',
    'image'
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}