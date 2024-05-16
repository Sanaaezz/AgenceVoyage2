<?php

namespace App\Entity;

use App\Repository\VoyageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[UniqueEntity(fields: ['nom_voyage'], message: "Ce nom est déjà utilisé")]
#[ORM\Entity(repositoryClass: VoyageRepository::class)]
class Voyage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups('api_voyage_index')]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le nom est obligatoire")]
    #[Assert\Length(min: 4, max: 50, minMessage: "Le nom doit comporter plus de 4 caractères.", maxMessage: "Le nom du voyage ne peut pas avoir plus de 50 caractères.")]
    #[Groups([
        'api_voyage_show',
        'api_voyage_index',
    ])]
    private ?string $nom_voyage = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\Url(message: "l'image ne peux pas etre prise en compte")]
    #[Groups([
        'api_voyage_show',
        'api_voyage_index'
    ])]
    private ?string $photo_voyage = null;

    #[ORM\Column]
    #[Groups([
        'api_voyage_show',
        'api_voyage_index'
    ])]
    private ?int $duree_voyage = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Groups('api_voyage_index')]
    private ?\DateTimeInterface $dateDepart_voyage = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Groups('api_voyage_index')]
    private ?\DateTimeInterface $dateRetour_voyage = null;

    #[ORM\Column(nullable: true)]
    private ?bool $visibility_voyage = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['api_voyage_index'])]
    private ?int $prix_voyage = null;

    /**
     * @var Collection<int, Categorie>
     */
    #[ORM\ManyToMany(targetEntity: Categorie::class, inversedBy: 'voyages')]
    #[Groups('api_voyage_index')]
    private Collection $categorie;

    /**
     * @var Collection<int, Destination>
     */
    #[ORM\ManyToMany(targetEntity: Destination::class, inversedBy: 'voyages')]
    #[Groups('api_voyage_index')]
    private Collection $destination;

    /**
     * @var Collection<int, Contact>
     */
    #[ORM\OneToMany(targetEntity: Contact::class, mappedBy: 'voyage')]
    private Collection $contact;



    #[ORM\Column(length: 255, nullable: true)]
    #[Groups('api_voyage_index')]
    private ?string $description_voyage = null;

    #[ORM\ManyToOne(inversedBy: 'voyages')]
    #[Groups('api_voyage_index')]
    private ?Utilisateur $user = null;

  

    public function __construct()
    {
        $this->categorie = new ArrayCollection();
        $this->destination = new ArrayCollection();
        $this->contact = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomVoyage(): ?string
    {
        return $this->nom_voyage;
    }

    public function setNomVoyage(string $nom_voyage): static
    {
        $this->nom_voyage = $nom_voyage;

        return $this;
    }

    public function getPhotoVoyage(): ?string
    {
        return $this->photo_voyage;
    }

    public function setPhotoVoyage(string $photo_voyage): static
    {
        $this->photo_voyage = $photo_voyage;

        return $this;
    }

    public function getDureeVoyage(): ?int
    {
        return $this->duree_voyage;
    }

    public function setDureeVoyage(int $duree_voyage): static
    {
        $this->duree_voyage = $duree_voyage;

        return $this;
    }

    public function getDateDepartVoyage(): ?\DateTimeInterface
    {
        return $this->dateDepart_voyage;
    }

    public function setDateDepartVoyage(?\DateTimeInterface $dateDepart_voyage): static
    {
        $this->dateDepart_voyage = $dateDepart_voyage;

        return $this;
    }

    public function getDateRetourVoyage(): ?\DateTimeInterface
    {
        return $this->dateRetour_voyage;
    }

    public function setDateRetourVoyage(?\DateTimeInterface $dateRetour_voyage): static
    {
        $this->dateRetour_voyage = $dateRetour_voyage;

        return $this;
    }

    public function isVisibilityVoyage(): ?bool
    {
        return $this->visibility_voyage;
    }

    public function setVisibilityVoyage(?bool $visibility_voyage): static
    {
        $this->visibility_voyage = $visibility_voyage;

        return $this;
    }

    public function getPrixVoyage(): ?int
    {
        return $this->prix_voyage;
    }

    public function setPrixVoyage(?int $prix_voyage): static
    {
        $this->prix_voyage = $prix_voyage;

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategorie(): Collection
    {
        return $this->categorie;
    }

    public function addCategorie(Categorie $categorie): static
    {
        if (!$this->categorie->contains($categorie)) {
            $this->categorie->add($categorie);
        }

        return $this;
    }

    public function removeCategorie(Categorie $categorie): static
    {
        $this->categorie->removeElement($categorie);

        return $this;
    }

    /**
     * @return Collection<int, Destination>
     */
    public function getDestination(): Collection
    {
        return $this->destination;
    }

    public function addDestination(Destination $destination): static
    {
        if (!$this->destination->contains($destination)) {
            $this->destination->add($destination);
        }

        return $this;
    }

    public function removeDestination(Destination $destination): static
    {
        $this->destination->removeElement($destination);

        return $this;
    }

    /**
     * @return Collection<int, Contact>
     */
    public function getContact(): Collection
    {
        return $this->contact;
    }

    public function addContact(Contact $contact): static
    {
        if (!$this->contact->contains($contact)) {
            $this->contact->add($contact);
            $contact->setVoyage($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): static
    {
        if ($this->contact->removeElement($contact)) {
            // set the owning side to null (unless already changed)
            if ($contact->getVoyage() === $this) {
                $contact->setVoyage(null);
            }
        }

        return $this;
    }



    public function getDescriptionVoyage(): ?string
    {
        return $this->description_voyage;
    }

    public function setDescriptionVoyage(?string $description_voyage): static
    {
        $this->description_voyage = $description_voyage;

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
