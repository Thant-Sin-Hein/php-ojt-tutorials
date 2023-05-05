<?php

namespace App\Contracts\Dao;

interface AuthDaoInterface
{
    public function registerValidate($request):object ;
    public function userCreate($request):object ;
    public function loginValidate($request):object ;
    public function emailCheck($request):object;
    public function passwordReset($request):object ;
    public function resetValidate($request):object ;
    public function findToken($request):object;
    public function passUpdate($request,$resetData):void;
    public function authen($request):object;
}
