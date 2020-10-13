<?php

namespace App\Repositories;

use App\Database\Db;

/**
 * Class StudentRepository
 * @package App\Repositories
 */
class StudentRepository extends Db
{
    /**
     * Method for getting all students.
     *
     * @return array
     */
    public function getStudents()
    {
        return self::getData('SELECT * FROM students');
    }
}
