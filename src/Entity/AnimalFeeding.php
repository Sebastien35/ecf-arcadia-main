<?php

namespace App\Entity;

use App\Repository\AnimalFeedingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalFeedingRepository::class)]
class AnimalFeeding
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $feeding_date = null;

    #[ORM\Column(length: 100)]
    private ?string $food = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $quantity = null;

    #[ORM\ManyToOne(inversedBy: 'animalFeedings')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Animal $animal = null;

    #[ORM\ManyToOne(inversedBy: 'animalFeedings')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFeedingDate(): ?\DateTimeInterface
    {
        return $this->feeding_date;
    }

    public function setFeedingDate(\DateTimeInterface $feeding_date): static
    {
        $this->feeding_date = $feeding_date;

        return $this;
    }

    public function getFood(): ?string
    {
        return $this->food;
    }

    public function setFood(string $food): static
    {
        $this->food = $food;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getAnimalId(): ?Animal
    {
        return $this->animal;
    }

    public function setAnimalId(?Animal $animal_id): static
    {
        $this->animal = $animal_id;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user;
    }

    public function setUserId(?User $user_id): static
    {
        $this->user = $user_id;

        return $this;
    }
}
