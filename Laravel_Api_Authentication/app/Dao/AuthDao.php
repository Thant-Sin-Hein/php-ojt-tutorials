<?php
namespace App\Dao;

use App\Contracts\Dao\AuthDaoInterface;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Auth;

class AuthDao implements AuthDaoInterface
{
    public function registerValidate($request):object {
        return Validator::make($request->all(),[
            'name'=>'required',
            'email' => 'required|email|max:255|unique:users,email',
            'password'=>'required',
            'confirm_password'=>'required|same:password'
        ]);
    }

    public function userCreate($request):object {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        return User::create($input);
    }

    public function loginValidate($request):object {
        return  Validator::make($request->all(),[
            'email' => 'required',
            'password'=>'required',
        ]);
    }

    public function emailCheck($request):object {
        return User::where('email',$request->email)->get();
    }

    public function authen($request):object {
       return Auth::user();
    }

    public function passwordReset($request):object {
        $token =Str::random(40);
        $datetime=Carbon::now()->format('Y-m-d H-i-s');
        return  PasswordReset::updateOrCreate(
            ['email'=>$request->email],
            [
                'email'=>$request->email,
                'token'=>$token,
                'created_at'=>$datetime
            ]
        );
    }

    public function resetValidate($request):object {
        return  Validator::make($request->all(),[
            'token'=>'required',
            'password'=>'required',
            'confirm_password'=>'required|same:password'
        ]);
    }

    public function findToken($request):object {
        return PasswordReset::where('token',$request->token)->get();
    }

    public function passUpdate($request,$resetData):void {
        $user = User::where('email',$resetData[0]['email'])->first();
        $userUpdate = User::find($user->id);
        $userUpdate->password = bcrypt($request->password);
        $userUpdate->save();
    }

}
