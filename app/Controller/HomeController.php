<?php

namespace App\Controller;

/**
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends BaseController
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Method for creating index view.
     */
    public function index()
    {
        $this->createView('index');
    }
}
