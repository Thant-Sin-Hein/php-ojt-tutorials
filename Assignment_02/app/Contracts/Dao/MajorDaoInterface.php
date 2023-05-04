<?php

namespace App\Contracts\Dao;

interface MajorDaoInterface
{
    public function getName(): object;
    public function deleteName($majors): void;
    public function getNameById(int $id): object;
    public function updateName(array $data, $id): void;
    public function createMajor(array $data): void;
}
