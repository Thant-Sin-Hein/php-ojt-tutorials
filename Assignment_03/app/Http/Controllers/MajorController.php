<?php

namespace App\Http\Controllers;
use App\Models\major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Contracts\Services\MajorServiceInterface;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\student;

class MajorController extends Controller
{
    private $majorService;

    /**
     * Create a new controller instance.
     * @param MajorServiceInterface $majorServiceInterface
     * @return void
     */
    public function __construct(MajorServiceInterface $majorServiceInterface)
    {
        $this->majorService = $majorServiceInterface;
    }
        //major
        public function studentCreate() {
            $major=$this->majorService->getName();
            return view('student.studentCreate', [
                'major' => $major
            ]);
        }

        public function majorCreate() {
            return view('major.majorCreate');
        }
        public function majorStore(Request $request) {
            $validator= $this->majorService->validateName($request);
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
            $major=$this->majorService->getName();
            return view('major.major', [
                'major' => $major
            ]);
        }
        public function majorRemove(major $majors) {
            $this->majorService->deleteName($majors);
            return redirect('/majorShow');
        }
        public function majorEdit($id) {
            $user = $this->majorService->getNameById($id);
            return view('major.majorEdit',compact('user'));
        }
        public function update(StudentUpdateRequest $request, $id) {
            $this->majorService->updateName($request->only([
                'name',
            ]), $id);
            return redirect()->route('major#show');
        }


}
