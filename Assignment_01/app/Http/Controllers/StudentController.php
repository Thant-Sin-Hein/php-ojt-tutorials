<?php

namespace App\Http\Controllers;
use App\Models\major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Contracts\Services\UserServiceInterface;
use App\Http\Requests\UserUpdateRequest;
use App\Models\student;

class StudentController extends Controller
{
    private $userService;

    /**
     * Create a new controller instance.
     * @param UserServiceInterface $userServiceInterface
     * @return void
     */
    public function __construct(UserServiceInterface $userServiceInterface)
    {
        $this->userService = $userServiceInterface;
    }
    //major
    public function majorCreate() {
        return view('majorCreate');
    }
    public function majorStore(Request $request) {
        $validator= $this->userService->validateName($request);
        if ($validator->fails()) {
            return redirect('/majorCreate')
                ->withInput()
                ->withErrors($validator);
        }
        else {
            $major = new major;
            $major->name = $request->name;
            $major->save();

        return redirect('/majorShow');
        }
    }
    public function majorShow() {
        $major=$this->userService->getName();
        return view('major', [
            'major' => $major
        ]);
    }
    public function majorRemove(major $majors) {
        $this->userService->deleteName($majors);
        return redirect('/majorShow');
    }
    public function majorEdit($id) {
        $user = $this->userService->getNameById($id);
        return view('majorEdit',compact('user'));
    }
    public function update(UserUpdateRequest $request, $id) {
        $this->userService->updateName($request->only([
            'name',
        ]), $id);
        return redirect()->route('major#show');
    }

    //student
    public function studentCreate() {
        $major=$this->userService->getName();
        return view('studentCreate', [
            'major' => $major
        ]);
    }
    public function studentStore(Request $request) {
        $validator= $this->userService->validateStudent($request);
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        else {
            $student = new student;
            $student->name = $request->name;
            $student->major_id=$request->major;
            $student->phone=$request->phone;
            $student->email=$request->email;
            $student->address=$request->address;
            $student->save();

        return redirect('/studentShow');
        }
    }
    public function studentShow() {
        $student=$this->userService->getStudent();
        return view('student', [
            'student' => $student
        ]);
    }
    public function studentEdit($id) {
        $major=$this->userService->getName();
        $user = $this->userService->getStudentById($id);
        return view('studentEdit',compact('user'),[
            'major' => $major
        ]);
    }

    public function studentUpdate(UserUpdateRequest $request, $id) {
        $this->userService->updateStudent($request->only([
            'name','major_id','phone','email','address',
        ]), $id);
        return redirect()->route('student#show');
    }

    public function studentRemove(student $students) {
        $this->userService->deleteStudent($students);
        return redirect('/studentShow');
    }
}
