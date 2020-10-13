<?php

namespace App\Controller;

use App\Helpers\Log;

/**
 * Class BaseController
 */
class BaseController
{
    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        Log::initFile();
    }

    /**
     * Method for creating view.
     *
     * @param string $view_name
     * @param array|null $data
     */
    public function createView(string $view_name, ?array $data = null)
    {
        if (file_exists("./view/$view_name.php")) {
            require_once("./view/$view_name.php");
        }
    }
}