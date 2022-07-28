<?php

namespace Core\Application\Services;

use Core\Domain\Entity\Aggregate\Restaurant\Restaurant;
use Core\Domain\Entity\Aggregate\Restaurant\RestaurantRepositoryImp;

class RestaurantService
{
    private RestaurantRepositoryImp $restaurantRepository;

    public function __construct(RestaurantRepositoryImp $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }

    /**
     * @param int $cityId
     *
     * @return Restaurant[]
     */
    public function getByCityId(int $cityId): array
    {
        return $this->restaurantRepository->getByCityId($cityId);
    }

}