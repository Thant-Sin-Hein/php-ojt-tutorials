<?php
namespace App\Contracts\Services;

interface UserServiceInterface
{
    public function getName(): object;
    public function validateName($request): object;
    public function deleteName($majors): void;
    public function getNameById(int $id): object;
    public function updateName(array $data,int $id): void;

    public function validateStudent($request): object;
}
