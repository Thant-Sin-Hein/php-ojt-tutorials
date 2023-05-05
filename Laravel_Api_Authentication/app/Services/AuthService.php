<?php
namespace App\Services;

use App\Contracts\Dao\AuthDaoInterface;
use App\Contracts\Services\AuthServiceInterface;
use Illuminate\Support\Facades\Validator;

/**
 * User Service class
 */
class AuthService implements AuthServiceInterface
{
    private $authDao;

    public function __construct(AuthDaoInterface $authDao)
    {
        $this->authDao = $authDao;
    }

    public function registerValidate($request): object
    {
       return $this->authDao->registerValidate($request);
    }

    public function userCreate($request): object
    {
       return $this->authDao->userCreate($request);
    }

    public function loginValidate($request): object
    {
       return $this->authDao->loginValidate($request);
    }

    public function emailCheck($request): object
    {
       return $this->authDao->emailCheck($request);
    }

    public function passwordReset($request): object
    {
       return $this->authDao->passwordReset($request);
    }

    public function resetValidate($request): object
    {
       return $this->authDao->resetValidate($request);
    }

    public function findToken($request): object
    {
       return $this->authDao->findToken($request);
    }

    public function passUpdate($request,$resetData): void
    {
        $this->authDao->passUpdate($request,$resetData);
    }

    public function authen($request): object
    {
        $this->authDao->authen($request);
    }

}
