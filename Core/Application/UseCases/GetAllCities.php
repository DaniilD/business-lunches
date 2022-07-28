<?php

namespace Core\Application\UseCases;

use Core\Application\Services\CityService;
use Core\Domain\Entity\City\City;

class GetAllCities
{
    private CityService $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    /**
     * @return City[]
     */
    public function handle(): array
    {
        return $this->cityService->getAll();
    }
}