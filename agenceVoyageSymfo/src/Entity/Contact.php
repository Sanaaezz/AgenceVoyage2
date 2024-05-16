<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $message_contact = null;

    #[ORM\ManyToOne(inversedBy: 'contact')]
    private ?Voyage $voyage = null;

    #[ORM\ManyToOne(inversedBy: 'contacts')]
    private ?Statut $statut = null;

    #[ORM\ManyToOne(inversedBy: 'contacts')]
    private ?Utilisateur $user = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessageContact(): ?string
    {
        return $this->message_contact;
    }

    public function setMessageContact(?string $message_contact): static
    {
        $this->message_contact = $message_contact;

        return $this;
    }

    public function getVoyage(): ?Voyage
    {
        return $this->voyage;
    }

    public function setVoyage(?Voyage $voyage): static
    {
        $this->voyage = $voyage;

        return $this;
    }

    public function getStatut(): ?Statut
    {
        return $this->statut;
    }

    public function setStatut(?Statut $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getUser(): ?Utilisateur
    {
        return $this->user;
    }

    public function setUser(?Utilisateur $user): static
    {
        $this->user = $user;

        return $this;
    }


}
