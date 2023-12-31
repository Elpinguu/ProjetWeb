<?php

/**
 * @var Twig\Environment $twig
 * @var int $nb
 */

use Symfony\Component\HttpFoundation\Response;

return new Response($twig->render('boissons/boisson.html.twig', ['nb' => $nb, 'listeFibonacci' => $listeFibonacci]));