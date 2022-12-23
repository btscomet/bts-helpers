<?php

namespace Src\Helpers;

class Send extends Base
{

    /**
     * @param $from
     * @param $to
     * @param $subject
     * @param $message
     * @return int
     */
    public static function email($from, $to, $subject, $message): int
    {
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <' . $from . '>' . "\r\n";

        mail($to, $subject, $message, $headers);
        return 1;
    }

}
