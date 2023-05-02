<?php

namespace App\Http\Controllers;
use App\Models\major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Contracts\Services\StudentServiceInterface;
use App\Contracts\Services\MajorServiceInterface;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\student;
use App\Exports\studentsExport;
use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;
use Mail;
use App\Mail\mailNotify;



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


    public function index() {
        $student = $this->studentService->getStudent();
        return response()->json($student,200);
    }

    public function studentShow() {
        return view('student.student');
    }

    public function studentCreate() {
        $major=$this->majorService->getName();
        return view('student.studentCreate', [
            'major' => $major
        ]);
    }

    public function store (Request $request) {
         $data = [
            'body' => $request->email
        ];


        $message = [
            'required'=>'The :attribute field is required',
        ];
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'phone'=> 'required|max:20',
            'email' => 'required|email|max:255|unique:students,email',
            'address'=> 'required|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json(['msg'=>$validator->errors()],200);
        }else {
            $student = $this->studentService->createStudent($request->only([
                'name','major','phone','email','address'
            ]));
            $mail =Mail::to('thant269269@gmail.com')->send(new mailNotify($data));
            return response()->json([$student,$mail,'msg'=>'mail send success'],200);
        }
    }

    public function edit ($id) {
        $major=$this->majorService->getName();
        $student = $this->studentService->getStudentById($id);
        return view('student.studentEdit',compact('student'),[
            'major' => $major
        ]);
    }

    public function update (Request $request,$id) {
        $student = $this->studentService->updateStudent($request->only([
            'name','major','phone','email','address'
        ]),$id);
          return response()->json(['msg'=>'success'],200);
    }

    public function destroy ($id) {
        $student = student::findOrFail($id);
        $student->delete();
        return response()->json(['deletedStudent' => $student,'msg'=>'success'],200);
    }

    public function search() {


        $student=$this->studentService->searchStudent();
        return view('student.student',compact('student'),
        [
            'student' => $student
        ]);

    }

    public function export()
    {
        return Excel::download(new studentsExport, 'students.csv');
    }

    public function import(Request $request)
    {
        Excel::import(new StudentsImport,$request->file);
        return redirect('/studentShow')->withStatus('Excel file imported successful');
    }


}
