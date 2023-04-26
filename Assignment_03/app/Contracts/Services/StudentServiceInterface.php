<?php
namespace App\Contracts\Services;

interface StudentServiceInterface
{
    public function validateStudent($request): object;
    public function getStudent(): object;
    public function getStudentById(int $id): object;
    public function updateStudent(array $data,int $id): void;
    public function deleteStudent($majors): void;
    public function searchStudent():object;
}
