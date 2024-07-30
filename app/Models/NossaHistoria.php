<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NossaHistoria extends Model
{
    use HasFactory;

    protected $table = 'nossa_historia';

    protected $fillable = [
        'title',
        'thumbnail',
        'subtitle',
        'email',
        'instagram',
        'facebook',
        'linkedin',
        'youtube',
        'portifolio',
        'content',
        'user_id',
        'whatsapp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
