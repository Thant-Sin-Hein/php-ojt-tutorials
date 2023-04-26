<?php
namespace App\Services;

use App\Contracts\Dao\StudentDaoInterface;
use App\Contracts\Services\StudentServiceInterface;
use App\Models\major;
use Illuminate\Support\Facades\Validator;

/**
 * User Service class
 */
class StudentService implements StudentServiceInterface
{
    private $studentDao;

    public function __construct(StudentDaoInterface $studentDao)
    {
        $this->studentDao = $studentDao;
    }

    public function validateStudent($request): object
    {
       return $this->studentDao->validateStudent($request);
    }

    public function getStudent(): object
    {
        return $this->studentDao->getStudent();
    }

    public function getStudentById(int $id): object
    {
        return $this->studentDao->getStudentById($id);
    }

    public function updateStudent(array $data, int $id): void
    {
        $this->studentDao->updateStudent($data, $id);
    }

    public function deleteStudent($students): void
    {
        $this->studentDao->deleteStudent($students);
    }

    public function searchStudent(): object
    {
        return $this->studentDao->searchStudent();
    }

}
