<?php

namespace App\Dao;

use App\Contracts\Dao\UserDaoInterface;
use App\Models\major;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserDao implements UserDaoInterface
{
    public function getName(): object
    {
        return major::orderBy('created_at', 'asc')->get();
    }

    public function validateName($request): object
    {
        return  Validator::make($request->all(), [
            'name' => 'required|max:255',
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

    public function validateStudent($request): object
    {
        return  Validator::make($request->all(), [
            'name' => 'required|max:255',
            'major'=>'required',
            'phone'=>'required|max:20',
            'email'=>'required|max:255',
            'address'=>'required|max:255',
        ]);
    }

}
