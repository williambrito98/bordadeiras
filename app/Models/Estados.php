<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_uf',
        'nome',
    ];

    public function cidades()
    {
        return $this->hasMany(Cidades::class);
    }
}
