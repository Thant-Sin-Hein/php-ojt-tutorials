<?php

namespace App\Contracts\Dao;

interface StudentDaoInterface
{
    public function createStudent(array $data): void;
    public function getStudent(): object;
    public function getStudentById(int $id): object;
    public function updateStudent(array $data, $id): void;
    public function deleteStudent($majors): void;
}
