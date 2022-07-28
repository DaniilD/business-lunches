<?php

namespace Core\Domain\Entity\Aggregate\BusinessLunch;

interface BusinessLunchRepositoryImp
{
    public function getById(int $id): BusinessLunch;

    /**
     * @param int $cityId
     *
     * @return BusinessLunch[]
     */
    public function getByCity(int $cityId): array;

    /**
     * @param int $restaurantId
     *
     * @return BusinessLunch[]
     */
    public function getByRestaurantId(int $restaurantId):array;
}