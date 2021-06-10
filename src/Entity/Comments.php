<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentsRepository::class)
 */
class Comments
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="comments")
     */
    private $userComment;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contentComment;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $propreteComment;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $emplacementComment;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $qualitePrixComment;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $serviceComment;

    /**
     * @ORM\ManyToOne(targetEntity=Rooms::class, inversedBy="commentRooms")
     */
    private $rooms;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserComment(): ?User
    {
        return $this->userComment;
    }

    public function setUserComment(?User $userComment): self
    {
        $this->userComment = $userComment;

        return $this;
    }

    public function getContentComment(): ?string
    {
        return $this->contentComment;
    }

    public function setContentComment(string $contentComment): self
    {
        $this->contentComment = $contentComment;

        return $this;
    }

    public function getPropreteComment(): ?int
    {
        return $this->propreteComment;
    }

    public function setPropreteComment(?int $propreteComment): self
    {
        $this->propreteComment = $propreteComment;

        return $this;
    }

    public function getEmplacementComment(): ?int
    {
        return $this->emplacementComment;
    }

    public function setEmplacementComment(?int $emplacementComment): self
    {
        $this->emplacementComment = $emplacementComment;

        return $this;
    }

    public function getQualitePrixComment(): ?int
    {
        return $this->qualitePrixComment;
    }

    public function setQualitePrixComment(?int $qualitePrixComment): self
    {
        $this->qualitePrixComment = $qualitePrixComment;

        return $this;
    }

    public function getServiceComment(): ?string
    {
        return $this->serviceComment;
    }

    public function setServiceComment(?string $serviceComment): self
    {
        $this->serviceComment = $serviceComment;

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