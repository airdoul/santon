<?php

namespace App\DTO;

class SantonSetOutputDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $nom,
        public readonly string $description,
        public readonly ?string $photo,
        public readonly float $prix,
        public readonly array $santons,
        public readonly array $regions,
        public readonly ?string $theme
    ) {}
}