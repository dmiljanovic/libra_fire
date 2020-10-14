<?php

namespace App\Services;

use App\Repositories\StudentRepository;

/**
 * Class StudentService
 * @package App\Services
 */
class StudentService
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
        $this->studentRepository = $studentRepository;
    }

    /**
     * @param int $studentId
     * @return array
     */
    public function getStudent(int $studentId) : array
    {
        $data = $this->studentRepository->getStudent($studentId);

        //TODO
        return $this->mapStudentData($data);
    }

    /**
     * @param array $studentData
     * @return array
     */
    private function mapStudentData(array $studentData) : array
    {
        return [];
    }
}
