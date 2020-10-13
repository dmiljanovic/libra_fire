<?php

use App\Route;
use App\Controller\HomeController;
use App\Controller\StudentController;
use App\Repositories\StudentRepository;

Route::add('/', function () {
    $homeCtrl = new HomeController();
    $homeCtrl->index();
});

Route::add('/students', function () {
    $studentCtrl = new StudentController(new StudentRepository());
    $studentCtrl->index();
});

Route::run('/');