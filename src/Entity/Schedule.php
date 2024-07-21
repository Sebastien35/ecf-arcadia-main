<?php

namespace App\Entity;

use App\Repository\ScheduleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Type;

#[ORM\Entity(repositoryClass: ScheduleRepository::class)]
class Schedule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $day = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $opening_time = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $closing_time = null;

    #[ORM\Column(type: 'boolean')]
    private ?bool $isClosed = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(string $day): static
    {
        $this->day = $day;

        return $this;
    }

    public function getOpeningTime(): ?\DateTimeInterface
    {
        return $this->opening_time;
    }

    public function setOpeningTime(?\DateTimeInterface $opening_time): self
    {
        $this->opening_time = $opening_time;

        return $this;
    }

    public function getClosingTime(): ?\DateTimeInterface
    {
        return $this->closing_time;
    }

    public function setClosingTime(?\DateTimeInterface $closing_time): self
    {
        $this->closing_time = $closing_time;

        return $this;
    }

    public function isClosed(): bool
    {
        return $this->isClosed;
    }

    public function setIsClosed(bool $isClosed): self
    {
        $this->isClosed = $isClosed;
        return $this;
    }
}
