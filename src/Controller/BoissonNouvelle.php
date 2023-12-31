<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 * @var Request $request
 * @var ValidatorInterface $validator
 */

use Entity\Boisson;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

$studentRepository = $entityManager->getRepository(Boisson::class);

$arrayViolations = [];

if (Request::METHOD_POST == $request->getMethod()) {
    $boisson = (new Boisson())
        ->setNom($request->get('name'))
        ->setType($request->get('Type'))
        ->setAlc($request->get('Alcohol'))
        ->setPourcent($request->get('Pourcent'));

    $violations = $validator->validate($boisson);

    if ($violations->count() == 0) {
        $entityManager->persist($boisson);
        $entityManager->flush();

        return new RedirectResponse('/student');
    }
    foreach ($violations as $violation) {
        $arrayViolations[$violation->getPropertyPath()][] = $violation->getMessage();
    }
}

return new Response($twig->render('student/new.html.twig', ['violations' => $arrayViolations]));