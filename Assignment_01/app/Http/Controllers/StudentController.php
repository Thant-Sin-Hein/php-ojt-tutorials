<?php

namespace App\Http\Controllers;
use App\Models\major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Contracts\Services\StudentServiceInterface;
use App\Contracts\Services\MajorServiceInterface;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\student;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    private $studentService;
    private $majorService;

    /**
     * Create a new controller instance.
     * @param UserServiceInterface $userServiceInterface
     * @return void
     */

    public function __construct(StudentServiceInterface $studentServiceInterface,MajorServiceInterface $majorServiceInterface)
    {
        $this->studentService = $studentServiceInterface;
        $this->majorService = $majorServiceInterface;
    }
    // create
    public function studentCreate() {
        $major=$this->majorService->getName();
        return view('student.create', [
            'major' => $major
        ]);
    }

    //show
    public function studentStore(StudentCreateRequest $request) {
        $this->studentService->createStudent($request->only([
            'name','major','phone','email','address',
        ]));
        return redirect()->route('student#show');

    }
    public function studentShow() {
        $student=$this->studentService->getStudent();
        return view('student.index', [
            'student' => $student
        ]);
    }

    //update
    public function studentEdit($id) {
        $major=$this->majorService->getName();
        $student = $this->studentService->getStudentById($id);
        return view('student.edit',compact('student'),[
            'major' => $major
        ]);
    }

    public function studentUpdate(StudentUpdateRequest $request, $id) {
        $this->studentService->updateStudent($request->only([
            'name','major','phone','email','address',
        ]), $id);
        return redirect()->route('student#show');
    }

    //delete
    public function studentRemove(student $students) {
        $this->studentService->deleteStudent($students);
        return redirect('/');
    }
}
