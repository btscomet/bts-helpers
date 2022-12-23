<?php

namespace Src\Helpers;

class Str extends Base
{

    /**
     * @param $haystack
     * @param $needle
     * @return bool
     */
    public static function contains($haystack, $needle): bool
    {
        return str_contains($haystack, $needle);
    }

    /**
     * @param $search
     * @param $replace
     * @param $subject
     * @return string|array
     */
    public static function remove($search, $replace, $subject): string|array
    {
        return str_replace($search, $replace, $subject);
    }


}
