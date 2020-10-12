<?php

namespace App\Controller;

/**
 * Class BaseController
 */
class BaseController
{
    /**
     * Method for creating view.
     *
     * @param string $view_name
     * @param null|string $data
     */
    public function createView(string $view_name, ?string $data = null)
    {
        if (file_exists("./view/$view_name.php")) {
            require_once("./view/$view_name.php");
        }
    }
}