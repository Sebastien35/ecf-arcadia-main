<?php

namespace App\Entity;

use App\Repository\VeterinaryReportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VeterinaryReportRepository::class)]
class VeterinaryReport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $health_status = null;

    #[ORM\Column(length: 100)]
    private ?string $food = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $food_weight = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $report_date = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $detail = null;

    #[ORM\ManyToOne(inversedBy: 'veterinaryReports')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Animal $animal = null;

    #[ORM\ManyToOne(inversedBy: 'veterinaryReports')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHealthStatus(): ?string
    {
        return $this->health_status;
    }

    public function setHealthStatus(string $health_status): static
    {
        $this->health_status = $health_status;

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

    public function getFoodWeight(): ?string
    {
        return $this->food_weight;
    }

    public function setFoodWeight(string $food_weight): static
    {
        $this->food_weight = $food_weight;

        return $this;
    }

    public function getReportDate(): ?\DateTimeInterface
    {
        return $this->report_date;
    }

    public function setReportDate(\DateTimeInterface $report_date): static
    {
        $this->report_date = $report_date;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): static
    {
        $this->detail = $detail;

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
