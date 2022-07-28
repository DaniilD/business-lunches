<?php

namespace Core\Domain\Entity\Aggregate\Restaurant;

interface RestaurantRepositoryImp
{
    public function getById(int $id): Restaurant;

    /**
     * @param int $cityId
     *
     * @return Restaurant[]
     */
    public function getByCityId(int $cityId): array;
}