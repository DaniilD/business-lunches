<?php

namespace Core\Application\UseCases;

use Core\Application\Services\BusinessLunchesService;
use Core\Domain\Entity\Aggregate\BusinessLunch\BusinessLunch;

class GetBusinessLunchesByRestaurant
{
    private BusinessLunchesService $businessLunchesService;

    public function __construct(BusinessLunchesService $businessLunchesService)
    {
        $this->businessLunchesService = $businessLunchesService;
    }

    /**
     * @param int $restaurantId
     *
     * @return BusinessLunch[]
     */
    public function handle(int $restaurantId): array
    {
        return $this->businessLunchesService->getByRestaurantId($restaurantId);
    }

}