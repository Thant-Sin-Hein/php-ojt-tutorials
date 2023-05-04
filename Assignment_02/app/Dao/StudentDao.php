<?php

namespace App\Dao;

use App\Contracts\Dao\StudentDaoInterface;
use App\Models\major;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentDao implements StudentDaoInterface
{

    public function createStudent(array $data): void
    {
        student::create([
            'name' => $data['name'],
            'phone'=>$data['phone'],
            'major_id' =>$data['major'],
            'email'=>$data['email'],
            'address'=>$data['address'],
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
            'major_id'=>$data['major'],
            'email'=>$data['email'],
            'address'=>$data['address'],
        ]);
    }
    public function deleteStudent($students): void
    {
        $students->delete();
    }

}
