<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    // use HasFactory;

    protected $table = 'players';

    protected $fillable = [
        'clubs_id',
        'name',
        'height',
        'position',
        'created_at',
        'updated_at'
    ];

    public function clubs()
    {
        return $this->belongsTo(Clubs::class, 'clubs_id', 'id');
    }
}
