<?php

namespace App\Entity;

use App\Repository\ChaineRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChaineRepository::class)]
class Chaine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $libelle_chaine = null;

    #[ORM\Column(length: 200)]
    private ?string $diffuseur_chaine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleChaine(): ?string
    {
        return $this->libelle_chaine;
    }

    public function setLibelleChaine(string $libelle_chaine): static
    {
        $this->libelle_chaine = $libelle_chaine;

        return $this;
    }

    public function getDiffuseurChaine(): ?string
    {
        return $this->diffuseur_chaine;
    }

    public function setDiffuseurChaine(string $diffuseur_chaine): static
    {
        $this->diffuseur_chaine = $diffuseur_chaine;

        return $this;
    }
}
