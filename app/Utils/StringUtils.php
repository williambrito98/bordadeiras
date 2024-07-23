<?php

namespace App\Utils;
class StringUtils
{
    public static function removeJavascriptTags(string $string): string
    {
        return preg_replace('/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/i', "", $string);
    }

}
