<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Contracts\Services\MajorServiceInterface;
use App\Http\Requests\MajorUpdateRequest;
use App\Http\Requests\MajorCreateRequest;
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
            return view('student.create', [
                'major' => $major
            ]);
        }

        public function majorCreate() {
            return view('major.create');
        }
        //majorCreate
        public function majorStore(MajorCreateRequest $request) {
            $this->majorService->createMajor($request->only([
                'name',
            ]));
            return redirect()->route('major#show');
        }

        //majorShow
        public function majorShow() {
            $major=$this->majorService->getName();
            return view('major.index', [
                'major' => $major
            ]);
        }

        //majorRemove
        public function majorRemove(major $majors) {
            $this->majorService->deleteName($majors);
            return redirect('/major-show');
        }

        //majorUpdate
        public function majorEdit($id) {
            $user = $this->majorService->getNameById($id);
            return view('major.edit',compact('user'));
        }

        public function update(MajorUpdateRequest $request, $id) {
            $this->majorService->updateName($request->only([
                'name',
            ]), $id);
            return redirect()->route('major#show');
        }


}
