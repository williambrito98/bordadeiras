<?php

namespace App\Utils;
class StringUtils
{
    public static function removeJavascriptTags(string $string): string
    {
        return preg_replace('/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/i', "", $string);
    }

    public static function clearString($string): string
    {
        do {
            $decoded = html_entity_decode($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
            if ($decoded === $string) {
                break;
            }
            $string = $decoded;
        } while (true);

        $cleanString = strip_tags($string);

        return trim($cleanString);
    }

}
