<?php

namespace Src\Helpers;

class Number extends Base
{

    /**
     * @param $a
     * @param $b
     * @param $c
     * @return float|int
     */
    public static function calculateDirectRule($a, $b, $c): float|int
    {
        return ($c * $b) / $a;
    }


    /**
     * @param $a
     * @param $b
     * @param $c
     * @return float|int
     */
    public static function calculateReverseRule($a, $b, $c): float|int
    {
        return ($a * $b) / $c;
    }


    /**
     * @param $a
     * @param $b
     * @param $c
     * @param $d
     * @param $e
     * @return float|int
     */
    public static function calculateDirectCompoundRule($a, $b, $c, $d, $e): float|int
    {
        return ($b * $d * $e) / ($a * $c);
    }


    /**
     * @param $a
     * @param $b
     * @param $c
     * @param $d
     * @param $e
     * @return float|int
     */
    public static function calculateReverseCompoundRule($a, $b, $c, $d, $e): float|int
    {
        return ($a * $c * $e) / ($b * $d);
    }


}
