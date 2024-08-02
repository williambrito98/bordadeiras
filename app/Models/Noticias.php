<?php

namespace App\Models;

use App\Utils\StringUtils;
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

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            self::onSave($model);
        });

        static::updating(function ($model) {
            self::onSave($model);
        });
    }

    private static function onSave(&$model): void
    {
        $model->subtitle = StringUtils::removeJavascriptTags($model->subtitle);
    }


}
