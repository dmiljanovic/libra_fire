<?php

use App\Route;
use App\Controller\HomeController;
use App\Controller\StudentController;
use App\Repositories\StudentRepository;
use App\Services\StudentService;

Route::add('/', function () {
    $homeCtrl = new HomeController();
    $homeCtrl->index();
});

Route::add('/students', function () {
    $studentCtrl = new StudentController(new StudentRepository());
    $studentCtrl->index();
});

Route::add('/students/([0-9]*)', function ($studentId) {
    $studentCtrl = new StudentController(new StudentRepository());
    $studentCtrl->getStudent($studentId, new StudentService(new StudentRepository()));
});

Route::run('/');