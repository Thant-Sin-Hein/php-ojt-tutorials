<?php
namespace App\Contracts\Services;

interface MajorServiceInterface
{
    public function getName(): object;
    public function createMajor(array $data): void;
    public function deleteName($majors): void;
    public function getNameById(int $id): object;
    public function updateName(array $data,int $id): void;
}
