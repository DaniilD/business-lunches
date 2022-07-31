<?php declare(strict_types=1);

use App\Controllers\BusinessLunchesController;
use http\Client\Request;
use http\Client\Response;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

// Create Twig
$twig = Twig::create('public/templates', ['cache' => 'path/to/cache']);

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));


$app->get('/', function ($request, $response, $args) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'profile.html', [
        'name' => 'this is name'
    ]);
});

$app->get('/business-lunches/city/{cityId}', [BusinessLunchesController::class, 'getByCityId']);

$app->get('/business-lunches/restaurant/{restaurantId}', function (Request $request, Response $response, $args) {

});

$app->run();