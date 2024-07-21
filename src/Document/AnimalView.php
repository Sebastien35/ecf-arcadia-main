<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document(collection: 'animal_view')]
class AnimalView
{
    #[MongoDB\Id]
    protected ?string $id;

    #[MongoDB\Field(type: 'string')]
    protected ?string $animalName;

    #[MongoDB\Field(type: 'int')]
    protected ?int $animalId;

    #[MongoDB\Field(type: 'int')]
    protected ?int $views = 0;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAnimalName(): ?string
    {
        return $this->animalName;
    }

    public function setAnimalName(string $animalName): self
    {
        $this->animalName = $animalName;
        return $this;
    }

    public function getAnimalId(): ?int
    {
        return $this->animalId;
    }

    public function setAnimalId(?int $animalId): void
    {
        $this->animalId = $animalId;
    }

    public function getViews(): int
    {
        return $this->views;
    }

    public function setViews(int $views): self
    {
        $this->views = $views;
        return $this;
    }

    public function incrementViews(): self
    {
        $this->views++;
        return $this;
    }
}