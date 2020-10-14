<?php

namespace App\Controller;

use Analog\Analog;
use App\Repositories\StudentRepository;
use App\Services\StudentService;

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
            Analog::log('Error while fetching all students from db: ' . $exception);
        }
    }

    /**
     * @param int $studentId
     * @param StudentService $studentService
     */
    public function getStudent(int $studentId, StudentService $studentService)
    {
        try {
            $studentData = $studentService->getStudent($studentId);
        } catch (\Exception $exception) {
            Analog::log('Error while fetching task from db: ' . $exception);
            header("location: ../../students");
        }

        $this->createView('student_view', $studentData);
    }
}
