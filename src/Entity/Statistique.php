<?php

namespace App\Entity;

use App\Repository\StatistiqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatistiqueRepository::class)
 */
class Statistique
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idChambre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbReservation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdChambre(): ?int
    {
        return $this->idChambre;
    }

    public function setIdChambre(?int $idChambre): self
    {
        $this->idChambre = $idChambre;

        return $this;
    }

    public function getNbReservation(): ?int
    {
        return $this->nbReservation;
    }

    public function setNbReservation(?int $nbReservation): self
    {
        $this->nbReservation = $nbReservation;

        return $this;
    }
}
