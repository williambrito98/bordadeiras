<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    use HasFactory;

    protected $table = 'noticias';

    protected $fillable = [
        'title',
        'image_url',
        'subtitle',
        'content',
        'user_id',
        'site_url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
