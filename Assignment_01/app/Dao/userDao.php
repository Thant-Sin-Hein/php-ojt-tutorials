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
            'name' => 'required|max:255|unique:majors,name',
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
            'email' => 'required|email|max:255|unique:students,email',
            'address'=>'required|max:255',
        ]);
    }

    public function getStudent(): object
    {
        return student::select('students.*','majors.name as subject')
        ->join('majors','students.major_id','majors.id')
        ->get();
        dd($data[0]->toArray());
    }

    public function getStudentById(int $id): object
    {
        return student::findOrFail($id);
    }

    public function updateStudent(array $data, $id): void
    {
        $students = student::findOrFail($id);
        $students->update([
            'name' => $data['name'],
            'phone'=>$data['phone'],
            'email'=>$data['email'],
            'address'=>$data['address'],
        ]);
    }
    public function deleteStudent($students): void
    {
        $students->delete();
    }

}
