<?php

namespace App\Contracts\Dao;

interface UserDaoInterface
{
    public function getName(): object;
    public function validateName($request): object;
    public function deleteName($majors): void;
    public function getNameById(int $id): object;
    public function updateName(array $data, $id): void;

    public function validateStudent($request): object;
    public function getStudent(): object;
    public function getStudentById(int $id): object;
    public function updateStudent(array $data, $id): void;
    public function deleteStudent($majors): void;
}
