<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use App\Contracts\Services\AuthServiceInterface;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Auth;

class AuthController extends Controller
{
    private $authService;

    /**
     * Create a new controller instance.
     * @param MajorServiceInterface $majorServiceInterface
     * @return void
     */
    public function __construct(AuthServiceInterface $authServiceInterface)
    {
        $this->authService = $authServiceInterface;
    }

    //register
    public function register(Request $request)
    {
        $validator = $this->authService->registerValidate($request);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response,400);
        }
        $user =  $this->authService->userCreate($request);

        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user -> name;

        $response = [
            'success'=> True,
            'data'=>$success,
            'message'=>'User Register Successfully'
        ];
        return response()->json($response,200);
    }

    //login
    public function login(Request $request)
    {
        $validator = $this->authService->loginValidate($request);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response,400);
        }
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user=Auth::user();
            $success['name'] = $user -> name;

            $response = [
                'success'=> True,
                'data'=>$success,
                'message'=>'User Login Successfully'
            ];
            return response()->json($response,200);
        }else {
            $response = [
                'success' => False,
                'message' => 'unauthorised'
            ];
            return response()->json($response);
        }
    }

    //forgetpassword
    public function forgetPassword(Request $request)
    {
        $user = $this->authService->emailCheck($request);
        if (count($user) > 0) {

            $passwordReset =$this->authService->passwordReset($request);
            $response = [
                'success'=> True,
                'data'=>$passwordReset->token,
                'message'=>'Your Email is found'
            ];
            return response()->json($response,200);
        }else {
            $response = [
                'success'=> False,
                'message'=>'Your Email was not found'
            ];
            return response()->json($response,200);
        }
    }

    //resetPassword
    public function resetPassword(Request $request) {
        $validator = $this->authService->resetValidate($request);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response,400);
        }
        $resetData = $this->authService->findToken($request);
        if (isset($request->token) && $resetData) {
            $update = $this->authService->passUpdate($request,$resetData);
            $response = [
                'success'=> True,
                'message'=>'password change success'
            ];
            return response()->json($response,200);
        }
        else {
            $response = [
                'success'=> False,
                'message'=>'Your token may be wrong!please check again!'
            ];
            return response()->json($response,200);
        }
    }
}
