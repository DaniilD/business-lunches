<?php

namespace Core\Application\Services;

use Core\Domain\Entity\City\City;
use Core\Domain\Entity\City\CityRepositoryImp;

class CityService
{
    private CityRepositoryImp $cityRepository;

    public function __construct(CityRepositoryImp $cityRepository){
        $this->cityRepository = $cityRepository;
    }

    /**
     * @return City[]
     */
    public function getAll():array
    {
        return $this->cityRepository->getAll();
    }
}