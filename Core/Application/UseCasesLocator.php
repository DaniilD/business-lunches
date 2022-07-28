<?php declare(strict_types=1);

namespace Core\Application;

use Core\Application\UseCases\GetAllCities;

class UseCasesLocator
{
    private static GetAllCities $getAllCities;

    public static function GetAllCities(): GetAllCities
    {
        if (!isset(self::$getAllCities)) {
            self::$getAllCities = new GetAllCities(
                ServicesLocator::CityService()
            );
        }

        return self::$getAllCities;
    }
}