<?php

/**
 * @var Twig\Environment $twig
 * @var int $nb
 */

use Symfony\Component\HttpFoundation\Response;


return new Response($twig->render('Reserver/Reserver.html.twig', ['nb' => $nb, 'listeFibonacci' => $listeFibonacci]));