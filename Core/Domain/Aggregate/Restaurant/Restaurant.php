<?php

namespace Core\Domain\Entity\Aggregate\Restaurant;

use Core\Domain\Entity\Aggregate\BusinessLunch\BusinessLunch;
use Core\Domain\Entity\City\City;
use Core\Domain\Entity\File\File;

class Restaurant
{
    public City   $city;
    public string $name;
    public string $description;
    public ?File  $photo = null;
    /**
     * @var BusinessLunch[]
     */
    public array $businessLunch = [];

    public function __construct(string $name, string $description, City $city)
    {
        $this->city        = $city;
        $this->name        = $name;
        $this->description = $description;
    }

    public function setPhoto(?File $photo): void
    {
        $this->photo = $photo;
    }

    public function addBusinessLunch(BusinessLunch $businessLunch): void
    {
        $this->businessLunch[] = $businessLunch;
    }
}