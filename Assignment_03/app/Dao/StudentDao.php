<?php

namespace App\Dao;

use App\Contracts\Dao\StudentDaoInterface;
use App\Models\major;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentDao implements StudentDaoInterface
{

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
        ->latest()
        ->paginate(5);
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

    public function searchStudent():object
    {
        $search_name = request()->query('query');
        $students = student::select('students.*','majors.name as subject')
        ->join('majors','students.major_id','majors.id')
        ->where('majors.name','LIKE','%'.$search_name.'%')
        ->orwhere('students.name','LIKE','%'.$search_name.'%')
        ->orwhere('students.phone','LIKE','%'.$search_name.'%')
        ->orwhere('students.email','LIKE','%'.$search_name.'%')
        ->orwhere('students.address','LIKE','%'.$search_name.'%')
        ->latest()
        ->paginate(5);

        $students->appends(['query' => $search_name]);

        return $students;
    }

}
