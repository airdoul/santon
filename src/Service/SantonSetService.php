<?php

namespace App\Service;

use App\DTO\SantonSetInputDTO;
use App\DTO\SantonSetOutputDTO;
use App\Entity\SantonSet;
use App\Repository\SantonRepository;
use App\Repository\RegionRepository;
use Doctrine\ORM\EntityManagerInterface;

class SantonSetService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private SantonRepository $santonRepository,
        private RegionRepository $regionRepository
    ) {}

    public function createSantonSet(SantonSetInputDTO $inputDTO): SantonSetOutputDTO
    {
        $santonSet = new SantonSet();
        $santonSet->setNom($inputDTO->nom);
        $santonSet->setDescription($inputDTO->description);
        $santonSet->setPhoto($inputDTO->photo);
        $santonSet->setPrix($inputDTO->prix);
        $santonSet->setTheme($inputDTO->theme);

        $santons = $this->santonRepository->findBy(['id' => $inputDTO->santonIds]);
        foreach ($santons as $santon) {
            $santonSet->addSanton($santon);
        }

        $regions = $this->regionRepository->findBy(['id' => $inputDTO->regionIds]);
        foreach ($regions as $region) {
            $santonSet->addRegion($region);
        }

        $this->entityManager->persist($santonSet);
        $this->entityManager->flush();

        return new SantonSetOutputDTO(
            $santonSet->getId(),
            $santonSet->getNom(),
            $santonSet->getDescription(),
            $santonSet->getPhoto(),
            $santonSet->getPrix(),
            $santonSet->getSantons()->toArray(),
            $santonSet->getRegions()->toArray(),
            $santonSet->getTheme()
        );
    }
}