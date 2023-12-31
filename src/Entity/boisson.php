<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository\StudentRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
#[ORM\Table(name: 'Boisson')]
class Boisson
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Your name must be at least {{ limit }} characters long',
        maxMessage: 'Your name cannot be longer than {{ limit }} characters',
    )]
    private string $name;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    private string $type;

    #[ORM\Column(type: 'boolean')]
    #[Assert\NotNull]
    private bool $alcohol;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    private int $pourcent;

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): String
    {
        return $this->type;
    }

    public function getNom(): String
    {
        return $this->nom;
    }

    public function getAlc(): bool
    {
        return $this->alcohol;
    }

    public function getPourcent(): int
    {
        return $this->pourcent;
    }
    

    public function setType(String $type): Boisson
    {
        $this->type = $type;
        return $this;
    }

    public function setNom(String $boisson): Boisson
    {
        $this->boisson = $boisson;
        return $this;
    }

    public function setAlc(int $pourcent): Boisson
    {
        $this->type = $type;
        return $this;
    }

    public function setPourcent(): Boisson
    {
        $this->type = $type;
        return $this;
    }

}