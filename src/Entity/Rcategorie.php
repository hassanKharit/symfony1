<?php

namespace App\Entity;

use App\Repository\RcategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RcategorieRepository::class)]
class Rcategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: self::class, inversedBy: 'rcategories')]
    private Collection $titre;

    #[ORM\ManyToMany(targetEntity: self::class, mappedBy: 'titre')]
    private Collection $rcategories;

    public function __toString()
    {
        return  $this->titre;
    }

    public function __construct()
    {
        $this->titre = new ArrayCollection();
        $this->rcategories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, self>
     */
    public function getTitre(): Collection
    {
        return $this->titre;
    }

    public function addTitre(self $titre): self
    {
        if (!$this->titre->contains($titre)) {
            $this->titre->add($titre);
        }

        return $this;
    }

    public function removeTitre(self $titre): self
    {
        $this->titre->removeElement($titre);

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getRcategories(): Collection
    {
        return $this->rcategories;
    }

    public function addRcategory(self $rcategory): self
    {
        if (!$this->rcategories->contains($rcategory)) {
            $this->rcategories->add($rcategory);
            $rcategory->addTitre($this);
        }

        return $this;
    }

    public function removeRcategory(self $rcategory): self
    {
        if ($this->rcategories->removeElement($rcategory)) {
            $rcategory->removeTitre($this);
        }

        return $this;
    }
}
