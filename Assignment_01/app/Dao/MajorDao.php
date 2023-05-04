<?php
namespace App\Dao;

use App\Contracts\Dao\MajorDaoInterface;
use App\Models\major;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MajorDao implements MajorDaoInterface
{
    public function getName(): object
    {
        return major::orderBy('created_at', 'asc')->get();
    }

    public function createMajor(array $data): void
    {
        major::create([
            'name' => $data['name'],
        ]);
    }

    public function deleteName($majors): void
    {
        $majors->delete();
    }
    public function getNameById(int $id): object
    {
        return major::findOrFail($id);
    }

    public function updateName(array $data, $id): void
    {
        $majors = major::findOrFail($id);
        $majors->update([
            'name' => $data['name'],
        ]);
    }
}


