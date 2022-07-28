<?php declare(strict_types=1);

namespace Core\Application;

use Core\Application\Services\CityService;

class ServicesLocator
{
    private static CityService $cityService;

    public static function CityService(): CityService
    {
        if (!isset(self::$cityService)) {
            self::$cityService = new CityService();
        }

        return self::$cityService;
    }
}