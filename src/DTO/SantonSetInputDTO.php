<?php

namespace App\DTO;

class SantonSetInputDTO
{
    public function __construct(
        public readonly string $nom,
        public readonly string $description,
        public readonly ?string $photo,
        public readonly float $prix,
        public readonly array $santonIds,
        public readonly array $regionIds,
        public readonly ?string $theme
    ) {}
}