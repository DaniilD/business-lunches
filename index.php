<?php declare(strict_types=1);

use App\Controllers\BusinessLunchesController;
use http\Client\Request;
use http\Client\Response;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function () {

});

$app->get('/business-lunches/city/{cityId}', [BusinessLunchesController::class, 'getByCityId']);

$app->get('/business-lunches/restaurant/{restaurantId}', function (Request $request, Response $response, $args) {

});

$app->run();