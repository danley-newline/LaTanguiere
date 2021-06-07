<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipementRepository::class)
 */
class Equipement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $nomEquipement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEquipement(): ?string
    {
        return $this->nomEquipement;
    }

    public function setNomEquipement(string $nomEquipement): self
    {
        $this->nomEquipement = $nomEquipement;

        return $this;
    }
}
