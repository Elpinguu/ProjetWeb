<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository\StudentRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
#[ORM\Table(name: 'Feedback')]
class Feedback
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
    private int $rating;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank]
    private String $comment;
}
