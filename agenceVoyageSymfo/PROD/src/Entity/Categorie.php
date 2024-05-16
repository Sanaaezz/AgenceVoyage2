<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NoSuspiciousCharacters;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups([
        'api_categorie_index'
    ])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Un nom est requis.")]
    #[Assert\NoSuspiciousCharacters(
        checks: NoSuspiciousCharacters::CHECK_INVISIBLE,
        restrictionLevel: NoSuspiciousCharacters::RESTRICTION_LEVEL_HIGH
    )]
    #[Groups([
        'api_categorie_index',
        'api_categorie_show'
    ])]
    private ?string $nom_categorie = null;

    /**
     * @var Collection<int, Voyage>
     */
    #[ORM\ManyToMany(targetEntity: Voyage::class, mappedBy: 'categorie')]
    private Collection $voyages;

    public function __construct()
    {
        $this->voyages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCategorie(): ?string
    {
        return $this->nom_categorie;
    }

    public function setNomCategorie(string $nom_categorie): static
    {
        $this->nom_categorie = $nom_categorie;

        return $this;
    }

    /**
     * @return Collection<int, Voyage>
     */
    public function getVoyages(): Collection
    {
        return $this->voyages;
    }

    public function addVoyage(Voyage $voyage): static
    {
        if (!$this->voyages->contains($voyage)) {
            $this->voyages->add($voyage);
            $voyage->addCategorie($this);
        }

        return $this;
    }

    public function removeVoyage(Voyage $voyage): static
    {
        if ($this->voyages->removeElement($voyage)) {
            $voyage->removeCategorie($this);
        }

        return $this;
    }
}
