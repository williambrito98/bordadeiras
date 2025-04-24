<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PorOndeProjetoPassou extends Model
{
    use HasFactory;

    protected $table = 'por_onde_projeto_passou';

    protected $fillable = [
        'iframe_url',
        'src',
        'alt',
        'description'
    ];

    protected $appends = ['iframe_src'];

    public function getIframeSrcAttribute(): ?string
    {
        if (!$this->iframe_url) {
            return null;
        }

        $html = html_entity_decode(html_entity_decode(trim($this->iframe_url)));

        if (preg_match('/<iframe[^>]+src=["\']([^"\']+)["\']/', $html, $matches)) {
            return $matches[1]; // retorna o valor de src
        }

        return null;

    }
}
