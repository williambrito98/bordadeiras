<?php

namespace App\Models;

use App\Utils\StringUtils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSecao extends Model
{
    use HasFactory;

    protected $table = 'home_secao';

    protected $fillable = [
        'titulo',
        'conteudo'
    ];

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
        $model->titulo = StringUtils::removeJavascriptTags($model->titulo);
    }

}
