<?php

use App\Route;
use App\Controller\HomeController;

Route::add('/', function () {
    $homeCtrl = new HomeController();
    $homeCtrl->index();
});

Route::run('/');