<?php

namespace App\Entity;

use App\Repository\StatusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatusRepository::class)]
class Status
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'status', targetEntity: DemandeAmies::class)]
    private Collection $demandeAmies;

    public function __construct()
    {
        $this->demandeAmies = new ArrayCollection();
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

    /**
     * @return Collection<int, DemandeAmies>
     */
    public function getDemandeAmies(): Collection
    {
        return $this->demandeAmies;
    }

    public function addDemandeAmy(DemandeAmies $demandeAmy): static
    {
        if (!$this->demandeAmies->contains($demandeAmy)) {
            $this->demandeAmies->add($demandeAmy);
            $demandeAmy->setStatus($this);
        }

        return $this;
    }

    public function removeDemandeAmy(DemandeAmies $demandeAmy): static
    {
        if ($this->demandeAmies->removeElement($demandeAmy)) {
            // set the owning side to null (unless already changed)
            if ($demandeAmy->getStatus() === $this) {
                $demandeAmy->setStatus(null);
            }
        }

        return $this;
    }
}
