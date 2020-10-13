<?php

namespace App\Helpers;

use Analog\Analog;
use Analog\Handler\File;

/**
 * Class Log
 * @package App\Helpers
 */
class Log
{
    /**
     * Hold the class instance.
     *
     * @var object|null
     */
    private static ?object $fileInit = null;

    /**
     * The constructor is private
     * to prevent initiation with outer code.
     *
     * Log constructor.
     */
    private function __construct()
    {
        //
    }

    /**
     * The object is created only if has no instance.
     */
    public static function initFile()
    {
        if (self::$fileInit == null)
        {
            self::$fileInit = Analog::handler(File::init('/tmp/php.log'));
        }
    }
}