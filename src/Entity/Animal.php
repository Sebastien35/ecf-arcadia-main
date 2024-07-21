<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150, nullable: false)]
    private ?string $name = null;

    #[ORM\Column(length: 150, nullable: false)]
    private ?string $race = null;

    #[ORM\Column(type: 'json', nullable: false)]
    private array $image = [];

    #[ORM\ManyToOne(targetEntity: Habitat::class, inversedBy: 'animals')]
    #[ORM\JoinColumn(nullable: false)]
    private Habitat $habitat;

    #[ORM\OneToMany(targetEntity: VeterinaryReport::class, mappedBy: 'animal', cascade: ['remove'])]
    private Collection $veterinaryReports;

    #[ORM\OneToMany(targetEntity: AnimalFeeding::class, mappedBy: 'animal', cascade: ['remove'])]
    private Collection $animalFeedings;

    public function __construct(Habitat $habitat)
    {
        $this->habitat = $habitat;
        $this->veterinaryReports = new ArrayCollection();
        $this->animalFeedings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race): static
    {
        $this->race = $race;

        return $this;
    }

    public function getImage(): array
    {
        return $this->image;
    }

    public function setImage(array $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getHabitat(): Habitat
    {
        return $this->habitat;
    }

    public function setHabitat(Habitat $habitat): static
    {
        $this->habitat = $habitat;

        return $this;
    }

}