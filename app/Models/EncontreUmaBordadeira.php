<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncontreUmaBordadeira extends Model
{
    use HasFactory;

    protected $table = 'encontre_uma_bordadeira';

    protected $fillable = [
        'description',
    ];


}
