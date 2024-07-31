<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoiadores extends Model
{
    use HasFactory;

    protected $table = 'apoiadores';

    protected $fillable = [
        'incentivadores',
        'patrocinadores',
        'parceiros',
        'realizadores'
    ];

    protected $casts = [
        'incentivadores' => 'array',
        'patrocinadores' => 'array',
        'parceiros' => 'array',
        'realizadores' => 'array'
    ];

}
