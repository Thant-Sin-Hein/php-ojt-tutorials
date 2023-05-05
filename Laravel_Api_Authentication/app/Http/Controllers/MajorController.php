<?php

namespace App\Http\Controllers;
use App\Models\major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Contracts\Services\MajorServiceInterface;
use App\Http\Requests\StudentUpdateRequest;
use App\Http\Requests\UserCreateRequest;
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

        public function index() {
            $major = $this->majorService->getName();
            return response()->json($major,200);
        }

        public function store (Request $request) {
            $message = [
                'required'=>'The :attribute field is required',
            ];
            $validator = Validator::make($request->all(),[
                'name' => 'required|max:255|unique:majors,name',
            ]);
            if ($validator->fails()) {
                return response()->json(['msg'=>$validator->errors()],200);
            }else {
                $major = $this->majorService->createMajor($request->only([
                    'name',
                ]));
                return response()->json([$major,'msg'=>'success'],200);
            }
        }


        public function edit($id) {
            $major = $this->majorService->getNameById($id);
            return view('major.majorEdit',compact('major'),[
                'major' => $major
            ]);
        }

        public function update (Request $request,$id) {
            $major = $this->majorService->updateName($request->only([
                'name',
            ]),$id);
              return response()->json(['msg'=>'success'],200);
        }

        public function destroy ($id) {
            $major = major::findOrFail($id);
            $major->delete();
            return response()->json(['deletedMajor' => $major,'msg'=>'success'],200);
        }

        public function majorShow() {
            return view('major.major');
        }

        public function majorCreate() {
            return view('major.majorCreate');
        }


}
