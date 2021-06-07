<?php

namespace App\Entity;

use App\Repository\DataWebsiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DataWebsiteRepository::class)
 */
class DataWebsite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageAccueil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseChambreHote;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageAccueil(): ?string
    {
        return $this->imageAccueil;
    }

    public function setImageAccueil(string $imageAccueil): self
    {
        $this->imageAccueil = $imageAccueil;

        return $this;
    }

    public function getAdresseChambreHote(): ?string
    {
        return $this->adresseChambreHote;
    }

    public function setAdresseChambreHote(string $adresseChambreHote): self
    {
        $this->adresseChambreHote = $adresseChambreHote;

        return $this;
    }
}
