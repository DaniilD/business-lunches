<?php

namespace Core\Domain\Entity\City;

interface CityRepositoryImp
{
    public function getById(int $id):City;
    public function getAll(): array;
}