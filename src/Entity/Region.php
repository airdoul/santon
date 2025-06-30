<?php

namespace App\Entity;

use App\Repository\RegionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegionRepository::class)]
class Region
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    /**
     * @var Collection<int, Santon>
     */
    #[ORM\OneToMany(targetEntity: Santon::class, mappedBy: 'region')]
    private Collection $santons;

    public function __construct()
    {
        $this->santons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Santon>
     */
    public function getSantons(): Collection
    {
        return $this->santons;
    }

    public function addSanton(Santon $santon): static
    {
        if (!$this->santons->contains($santon)) {
            $this->santons->add($santon);
            $santon->setRegion($this);
        }

        return $this;
    }

    public function removeSanton(Santon $santon): static
    {
        if ($this->santons->removeElement($santon)) {
            // set the owning side to null (unless already changed)
            if ($santon->getRegion() === $this) {
                $santon->setRegion(null);
            }
        }

        return $this;
    }
}
