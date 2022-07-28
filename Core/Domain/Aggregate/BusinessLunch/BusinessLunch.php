<?php

namespace Core\Domain\Entity\Aggregate\BusinessLunch;

use Core\Domain\Entity\Aggregate\Restaurant\Restaurant;
use Core\Domain\Entity\File\File;

class BusinessLunch
{
    public string     $name;
    public string     $description;
    public float      $price;
    public Restaurant $restaurant;
    public string     $link;
    public ?File      $photo = null;

    public function __construct(string $name, string $description, float $price, Restaurant $restaurant, string $link)
    {
        $this->name        = $name;
        $this->description = $description;
        $this->price       = $price;
        $this->restaurant  = $restaurant;
        $this->link        = $link;
    }

    public function setPhoto(?File $photo): void
    {
        $this->photo = $photo;
    }
}