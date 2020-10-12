<?php

namespace App\Controller;

/**
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends BaseController
{

    /**
     * Method for creating index view.
     */
    public function index()
    {
        $this->createView('index');
    }
}
