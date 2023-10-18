<?php

namespace App\Entity;

use App\Repository\DemandeAmiesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeAmiesRepository::class)]
class DemandeAmies
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'demandeAmies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'demandeAmies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user_destinataire = null;

    #[ORM\ManyToOne(inversedBy: 'demandeAmies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Status $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getUserDestinataire(): ?User
    {
        return $this->user_destinataire;
    }

    public function setUserDestinataire(?User $user_destinataire): static
    {
        $this->user_destinataire = $user_destinataire;

        return $this;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(?Status $status): static
    {
        $this->status = $status;

        return $this;
    }
}
