<?php

namespace App\Controllers;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class BusinessLunchesController
{
    public function getByCityId(ServerRequestInterface $request, ResponseInterface $response, $args): ResponseInterface
    {
        return $response;
    }
}