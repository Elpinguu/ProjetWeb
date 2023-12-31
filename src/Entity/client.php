<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Repository\StudentRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
#[ORM\Table(name: 'clients')]
class Client
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
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Your first name must be at least {{ limit }} characters long',
        maxMessage: 'Your first name cannot be longer than {{ limit }} characters',
    )]
    private string $firstname;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 10,
        max: 10,
        minMessage: 'Your phone number must be correct.',
        maxMessage: 'Your phone number must be correct.',
    )]
    private int $number;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    #[Assert\PositiveOrZero]
    private int $age;

    #[ORM\Column(type: 'integer')]
    private int $points;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Client
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Client
    {
        $this->name = $name;
        return $this;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): Client
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function getAge(): int
    {
        return $this->old;
    }

    public function setAge(int $old): Client
    {
        $this->old = $old;
        return $this;
    }

    public function getNumber():int
    {
        return $this->number;
    }

    public function setNumber(int $number):Client
    {
        $this->number = $number;
        return $this;
    }

    public function getPoint(): int
    {
        return $this->points;
    }

    public function setPoint(int $points): Client
    {
        $this->points = $points;
        return $this;
    }

    public function addPoint(int $value): Client
    {
        $this->points += $value;
        return $this;
    }

    public function rmPoint(int $value): Client
    {
        $this->points -= $value;
        return $this;
    }


    public function __toString(): string
    {
        return sprintf('%s %s', $this->name, $this->firstname);
    }


}