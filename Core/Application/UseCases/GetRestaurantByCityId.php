<?php

namespace Core\Application\UseCases;

use Core\Application\Services\RestaurantService;
use Core\Domain\Entity\Aggregate\Restaurant\Restaurant;

class GetRestaurantByCityId
{
    private RestaurantService $restaurantService;

    public function __construct(RestaurantService $restaurantService)
    {
        $this->restaurantService = $restaurantService;
    }

    /**
     * @param int $cityId
     *
     * @return Restaurant[]
     */
    public function handle(int $cityId): array
    {
        return $this->restaurantService->getByCityId($cityId);
    }
}