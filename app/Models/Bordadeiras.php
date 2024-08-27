<?php

namespace App\Models;

use App\Utils\StringUtils;
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

    protected $casts = [
        'images' => 'array',
    ];

    public function cidade()
    {
        return $this->belongsTo(Cidades::class);
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
        $model->content = StringUtils::removeJavascriptTags($model->content);
        $model->whatsapp = str_replace([' ', '(', ')', '-', '.'], '', $model->whatsapp);
        $model->instagram = str_replace('@', '', $model->instagram);
    }
}
