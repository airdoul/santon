<?php

namespace App\DTO;

class SantonSetDTO
{
    private string $nom;
    private string $description;
    private ?string $photo = null;
    private float $prix;
    private array $santonIds;
    private array $regionIds = [];
    private ?string $theme;

    public function __construct(string $name, string $description, array $santonIds, ?string $theme = null)
    {
        $this->nom = $name;
        $this->description = $description;
        $this->santonIds = $santonIds;
        $this->theme = $theme;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): void
    {
        $this->photo = $photo;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    public function getSantonIds(): array
    {
        return $this->santonIds;
    }

    public function setSantonIds(array $santonIds): void
    {
        $this->santonIds = $santonIds;
    }

    public function getRegionIds(): array
    {
        return $this->regionIds;
    }

    public function setRegionIds(array $regionIds): void
    {
        $this->regionIds = $regionIds;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): void
    {
        $this->theme = $theme;
    }
}