<?php

namespace Src\Helpers;

require_once 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

class Base
{

    /**
     * @return Dotenv
     */
    public static function config(): Dotenv
    {
        $dotenv = new Dotenv();
        $dotenv->load(__DIR__ . '/.env', __DIR__ . '/.env.example');
        return $dotenv;
    }

}
