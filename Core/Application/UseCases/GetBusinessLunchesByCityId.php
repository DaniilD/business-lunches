<?php

namespace Core\Application\UseCases;

use Core\Application\Services\BusinessLunchesService;
use Core\Domain\Entity\Aggregate\BusinessLunch\BusinessLunch;

class GetBusinessLunchesByCityId
{
    private BusinessLunchesService $businessLunchesService;

    public function __construct(BusinessLunchesService $businessLunchesService)
    {
        $this->businessLunchesService = $businessLunchesService;
    }

    /**
     * @param int $cityId
     *
     * @return BusinessLunch[]
     */
    public function handle(int $cityId): array
    {
        return $this->businessLunchesService->getByCityId($cityId);
    }
}