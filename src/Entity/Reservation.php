<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservations")
     */
    private $userReservation;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $debutReservation;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $finReservation;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $numReservation;

    /**
     * @ORM\ManyToOne(targetEntity=Rooms::class, inversedBy="reservationRooms")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rooms;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserReservation(): ?User
    {
        return $this->userReservation;
    }

    public function setUserReservation(?User $userReservation): self
    {
        $this->userReservation = $userReservation;

        return $this;
    }

    public function getDebutReservation(): ?string
    {
        return $this->debutReservation;
    }

    public function setDebutReservation(string $debutReservation): self
    {
        $this->debutReservation = $debutReservation;

        return $this;
    }

    public function getFinReservation(): ?string
    {
        return $this->finReservation;
    }

    public function setFinReservation(string $finReservation): self
    {
        $this->finReservation = $finReservation;

        return $this;
    }

    public function getNumReservation(): ?string
    {
        return $this->numReservation;
    }

    public function setNumReservation(string $numReservation): self
    {
        $this->numReservation = $numReservation;

        return $this;
    }

    public function getRooms(): ?Rooms
    {
        return $this->rooms;
    }

    public function setRooms(?Rooms $rooms): self
    {
        $this->rooms = $rooms;

        return $this;
    }
}
