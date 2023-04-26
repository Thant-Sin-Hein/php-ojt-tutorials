<?php
namespace App\Services;

use App\Contracts\Dao\MajorDaoInterface;
use App\Contracts\Services\MajorServiceInterface;
use App\Models\major;
use Illuminate\Support\Facades\Validator;

/**
 * User Service class
 */
class MajorService implements MajorServiceInterface
{
    private $majorDao;

    public function __construct(MajorDaoInterface $majorDao)
    {
        $this->majorDao = $majorDao;
    }
    public function getName(): object
    {
        return $this->majorDao->getName();
    }
    public function validateName($request): object
    {
       return $this->majorDao->validateName($request);
    }
    public function deleteName($majors): void
    {
        $this->majorDao->deleteName($majors);
    }
    public function getNameById(int $id): object
    {
        return $this->majorDao->getNameById($id);
    }
    public function updateName(array $data, int $id): void
    {
        $this->majorDao->updateName($data, $id);
    }

}
