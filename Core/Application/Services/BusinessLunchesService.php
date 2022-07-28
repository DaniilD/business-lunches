<?php

namespace Core\Application\Services;

use Core\Domain\Entity\Aggregate\BusinessLunch\BusinessLunch;
use Core\Domain\Entity\Aggregate\BusinessLunch\BusinessLunchRepositoryImp;
use Core\Domain\Entity\Aggregate\Restaurant\Restaurant;

class BusinessLunchesService
{
    private BusinessLunchRepositoryImp $businessLunchRepository;

    public function __construct(BusinessLunchRepositoryImp $businessLunchRepository)
    {
        $this->businessLunchRepository = $businessLunchRepository;
    }

    /**
     * @param int $cityId
     *
     * @return BusinessLunch[]
     */
    public function getByCityId(int $cityId): array
    {
        return $this->businessLunchRepository->getByCity($cityId);
    }

    /**
     * @param int $restaurantId
     *
     * @return Restaurant[]
     */
    public function getByRestaurantId(int $restaurantId):array
    {
        $this->businessLunchRepository->getByRestaurantId($restaurantId);
    }
}