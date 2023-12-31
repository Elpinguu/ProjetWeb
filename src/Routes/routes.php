<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/'));
$routes->add('sites', new Route('/sites'));
$routes->add('boissons', new Route('/boissons'));
$routes->add('Reserver', new Route('/Reserver'));
$routes->add('studentNew', new Route('/student/new'));
$routes->add('studentShow', new Route('/student/{id}', [], ['id' => ('\d+')]));
$routes->add('studentEdit', new Route('/student/{id}/edit', [], ['id' => ('\d+')]));
$routes->add('studentDelete', new Route('/student/{id}/delete', [], ['id' => ('\d+')]));

return $routes;