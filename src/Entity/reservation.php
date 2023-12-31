<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository\StudentRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
#[ORM\Table(name: 'client')]
class Reservation
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    private int $id_client;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    private int $id_site;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    private int $nb_spots;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    private String $date;
}