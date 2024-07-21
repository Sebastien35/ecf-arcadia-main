<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(type: 'string', length: 64, nullable: true)]
    private ?string $resetPasswordToken;

    private ?string $plainPassword = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var Collection<int, VeterinaryReport>
     */
    #[ORM\OneToMany(targetEntity: VeterinaryReport::class, mappedBy: 'user_id')]
    private Collection $veterinaryReports;

    /**
     * @var Collection<int, AnimalFeeding>
     */
    #[ORM\OneToMany(targetEntity: AnimalFeeding::class, mappedBy: 'user_id')]
    private Collection $animalFeedings;

    public function __construct()
    {
        $this->veterinaryReports = new ArrayCollection();
        $this->animalFeedings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function getSalt(): ?string
    {
        return null;
    }


    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, VeterinaryReport>
     */
    public function getVeterinaryReports(): Collection
    {
        return $this->veterinaryReports;
    }

    public function addVeterinaryReport(VeterinaryReport $veterinaryReport): static
    {
        if (!$this->veterinaryReports->contains($veterinaryReport)) {
            $this->veterinaryReports->add($veterinaryReport);
            $veterinaryReport->setUserId($this);
        }

        return $this;
    }

    public function removeVeterinaryReport(VeterinaryReport $veterinaryReport): static
    {
        if ($this->veterinaryReports->removeElement($veterinaryReport)) {
            // set the owning side to null (unless already changed)
            if ($veterinaryReport->getUserId() === $this) {
                $veterinaryReport->setUserId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AnimalFeeding>
     */
    public function getAnimalFeedings(): Collection
    {
        return $this->animalFeedings;
    }

    public function addAnimalFeeding(AnimalFeeding $animalFeeding): static
    {
        if (!$this->animalFeedings->contains($animalFeeding)) {
            $this->animalFeedings->add($animalFeeding);
            $animalFeeding->setUserId($this);
        }

        return $this;
    }

    public function removeAnimalFeeding(AnimalFeeding $animalFeeding): static
    {
        if ($this->animalFeedings->removeElement($animalFeeding)) {
            // set the owning side to null (unless already changed)
            if ($animalFeeding->getUserId() === $this) {
                $animalFeeding->setUserId(null);
            }
        }

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function getResetPasswordToken(): ?string
    {
        return $this->resetPasswordToken;
    }

    public function setResetPasswordToken(?string $resetPasswordToken): self
    {
        $this->resetPasswordToken = $resetPasswordToken;
        return $this;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(?string $plainPassword): self
    {
        $this->plainPassword = $plainPassword;
        return $this;
    }
}
