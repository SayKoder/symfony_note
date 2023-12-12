<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VideoRepository::class)]
class Video
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 175)]
    private ?string $titre_video = null;

    #[ORM\Column(length: 255)]
    private ?string $image_video = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datepublication = null;

    #[ORM\Column(length: 30)]
    private ?string $chaine_video = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreVideo(): ?string
    {
        return $this->titre_video;
    }

    public function setTitreVideo(string $titre_video): static
    {
        $this->titre_video = $titre_video;

        return $this;
    }

    public function getImageVideo(): ?string
    {
        return $this->image_video;
    }

    public function setImageVideo(string $image_video): static
    {
        $this->image_video = $image_video;

        return $this;
    }

    public function getDatepublication(): ?\DateTimeInterface
    {
        return $this->datepublication;
    }

    public function setDatepublication(\DateTimeInterface $datepublication): static
    {
        $this->datepublication = $datepublication;

        return $this;
    }

    public function getChaineVideo(): ?string
    {
        return $this->chaine_video;
    }

    public function setChaineVideo(string $chaine_video): static
    {
        $this->chaine_video = $chaine_video;

        return $this;
    }
}
