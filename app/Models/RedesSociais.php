<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedesSociais extends Model
{
    use HasFactory;

    protected $table = 'redes_sociais';

    protected $fillable = [
        'instagram',
        'facebook',
        'youtube',
        'whatsapp',
        'linkedin',
        'email',
    ];
}
