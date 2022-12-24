<?php

namespace Src\Helpers;

class Send extends Base
{

    public $envConfig;

    public function __construct()
    {
        $envConfig = self::config();
    }

    public static function configEmail()
    {

        try {
            $transport = (new Swift_SmtpTransport('smtp.hostname', 25))
                ->setUsername('xxxxxxxx')
                ->setPassword('xxxxxxxx');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}
