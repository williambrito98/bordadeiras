<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function estado()
    {
        return $this->belongsTo(Estados::class);
    }
}
