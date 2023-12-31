<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository\StudentRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
#[ORM\Table(name: 'site')]
class Site
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
        minMessage: 'Your adress must be at least {{ limit }} characters long',
        maxMessage: 'Your adress cannot be longer than {{ limit }} characters',
    )]
    private string $adress;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'The owner name must be at least {{ limit }} characters long',
        maxMessage: 'The owner name cannot be longer than {{ limit }} characters',
    )]
    private string $owner;

    #[ORM\Column(type: 'integer')]
    private int $spots;

    public function getAdress(): String
    {
        return $this->adress;
    }
    
    public function setAdress(String $adress) : Site
    {
        $this->adress = $adress;
        return $this;
    }

    public function getOwner(): String
    {
        return $this->owner;
    }
    
    public function setOwner(String $adress) : Site
    {
        $this->owner = $owner;
        return $this;
    }

    public function getSpots(): int
    {
        return $this->spots;
    }

    public function setSpots(int $Spotss): Site
    {
        $this->spots = $spots;
        return $this;
    }

    public function addSpots(int $value): Site
    {
        $this->spots += $value;
        return $this;
    }

    public function rmSpots(int $value): Site
    {
        $this->spots -= $value;
        return $this;
    }
    
    
}