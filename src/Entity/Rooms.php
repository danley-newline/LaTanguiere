<?php

namespace App\Entity;

use App\Repository\RoomsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoomsRepository::class)
 */
class Rooms
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
    private $nomRoom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageRoom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionRoom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $miniDescriptionRoom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $noteRoom;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $prixRoom;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $enReservation;

    /**
     * @ORM\ManyToMany(targetEntity=Equipement::class)
     */
    private $equipements;

    /**
     * @ORM\OneToMany(targetEntity=Comments::class, mappedBy="rooms")
     */
    private $commentRooms;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="rooms")
     */
    private $reservationRooms;

    public function __construct()
    {
        $this->equipements = new ArrayCollection();
        $this->commentRooms = new ArrayCollection();
        $this->reservationRooms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRoom(): ?string
    {
        return $this->nomRoom;
    }

    public function setNomRoom(string $nomRoom): self
    {
        $this->nomRoom = $nomRoom;

        return $this;
    }

    public function getImageRoom(): ?string
    {
        return $this->imageRoom;
    }

    public function setImageRoom(string $imageRoom): self
    {
        $this->imageRoom = $imageRoom;

        return $this;
    }

    public function getDescriptionRoom(): ?string
    {
        return $this->descriptionRoom;
    }

    public function setDescriptionRoom(?string $descriptionRoom): self
    {
        $this->descriptionRoom = $descriptionRoom;

        return $this;
    }

    public function getMiniDescriptionRoom(): ?string
    {
        return $this->miniDescriptionRoom;
    }

    public function setMiniDescriptionRoom(?string $miniDescriptionRoom): self
    {
        $this->miniDescriptionRoom = $miniDescriptionRoom;

        return $this;
    }

    public function getNoteRoom(): ?int
    {
        return $this->noteRoom;
    }

    public function setNoteRoom(?int $noteRoom): self
    {
        $this->noteRoom = $noteRoom;

        return $this;
    }

    public function getPrixRoom(): ?string
    {
        return $this->prixRoom;
    }

    public function setPrixRoom(?string $prixRoom): self
    {
        $this->prixRoom = $prixRoom;

        return $this;
    }

    public function getEnReservation(): ?bool
    {
        return $this->enReservation;
    }

    public function setEnReservation(bool $enReservation): self
    {
        $this->enReservation = $enReservation;

        return $this;
    }

    /**
     * @return Collection|Equipement[]
     */
    public function getEquipements(): Collection
    {
        return $this->equipements;
    }

    public function addEquipement(Equipement $equipement): self
    {
        if (!$this->equipements->contains($equipement)) {
            $this->equipements[] = $equipement;
        }

        return $this;
    }

    public function removeEquipement(Equipement $equipement): self
    {
        $this->equipements->removeElement($equipement);

        return $this;
    }

    /**
     * @return Collection|Comments[]
     */
    public function getCommentRooms(): Collection
    {
        return $this->commentRooms;
    }

    public function addCommentRoom(Comments $commentRoom): self
    {
        if (!$this->commentRooms->contains($commentRoom)) {
            $this->commentRooms[] = $commentRoom;
            $commentRoom->setRooms($this);
        }

        return $this;
    }

    public function removeCommentRoom(Comments $commentRoom): self
    {
        if ($this->commentRooms->removeElement($commentRoom)) {
            // set the owning side to null (unless already changed)
            if ($commentRoom->getRooms() === $this) {
                $commentRoom->setRooms(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservationRooms(): Collection
    {
        return $this->reservationRooms;
    }

    public function addReservationRoom(Reservation $reservationRoom): self
    {
        if (!$this->reservationRooms->contains($reservationRoom)) {
            $this->reservationRooms[] = $reservationRoom;
            $reservationRoom->setRooms($this);
        }

        return $this;
    }

    public function removeReservationRoom(Reservation $reservationRoom): self
    {
        if ($this->reservationRooms->removeElement($reservationRoom)) {
            // set the owning side to null (unless already changed)
            if ($reservationRoom->getRooms() === $this) {
                $reservationRoom->setRooms(null);
            }
        }

        return $this;
    }
}
