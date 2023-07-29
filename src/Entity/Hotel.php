<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HotelRepository::class)
 */
class Hotel
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
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_etoiles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_par_chambre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNbreEtoiles(): ?int
    {
        return $this->nbre_etoiles;
    }

    public function setNbreEtoiles(int $nbre_etoiles): self
    {
        $this->nbre_etoiles = $nbre_etoiles;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPrixParChambre(): ?float
    {
        return $this->prix_par_chambre;
    }

    public function setPrixParChambre(float $prix_par_chambre): self
    {
        $this->prix_par_chambre = $prix_par_chambre;

        return $this;
    }
}
