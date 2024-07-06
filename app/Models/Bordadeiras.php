<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bordadeiras extends Model
{
    use HasFactory;

    protected $table = 'bordadeiras';

    protected $fillable = [
        'banner_url',
        'nome',
        'thumbnail_url',
        'content',
        'images',
        'cidade_id',
        'instagram',
        'email',
        'facebook',
        'youtube',
        'whatsapp',
        'linkedin',
    ];

    public function cidade()
    {
        return $this->belongsTo(Cidades::class);
    }
}
