<?php

namespace App\Controller;

use App\Repositories\StudentRepository;

/**
 * Class StudentController
 * @package App\Controller
 */
class StudentController extends BaseController
{
    /**
     * @var StudentRepository
     */
    private StudentRepository $studentRepository;

    /**
     * StudentController constructor.
     * @param StudentRepository $studentRepository
     */
    public function __construct(StudentRepository $studentRepository)
    {
        parent::__construct();
        $this->studentRepository = $studentRepository;
    }

    /**
     * Method for creating index view.
     */
    public function index()
    {
        $students = $this->studentRepository->getStudents();

        try {
            $this->createView('students', $students);
        } catch (\Exception $exception) {
            \Analog::log('Error while fetching all students from db: ' . $exception);
        }
    }
}
