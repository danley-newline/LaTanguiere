<?php

namespace App\Entity;

use App\Repository\ActivitiesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActivitiesRepository::class)
 */
class Activities
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
    private $nomActivity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptionActivity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageActivity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseActivity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomActivity(): ?string
    {
        return $this->nomActivity;
    }

    public function setNomActivity(string $nomActivity): self
    {
        $this->nomActivity = $nomActivity;

        return $this;
    }

    public function getDescriptionActivity(): ?string
    {
        return $this->descriptionActivity;
    }

    public function setDescriptionActivity(string $descriptionActivity): self
    {
        $this->descriptionActivity = $descriptionActivity;

        return $this;
    }

    public function getImageActivity(): ?string
    {
        return $this->imageActivity;
    }

    public function setImageActivity(string $imageActivity): self
    {
        $this->imageActivity = $imageActivity;

        return $this;
    }

    public function getAdresseActivity(): ?string
    {
        return $this->adresseActivity;
    }

    public function setAdresseActivity(string $adresseActivity): self
    {
        $this->adresseActivity = $adresseActivity;

        return $this;
    }
}
