<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre_siege = null;

    #[ORM\Column(length: 255)]
    private ?string $boite_vitesse = null;

    #[ORM\Column(length: 255)]
    private ?string $Essence = null;

    #[ORM\Column]
    private ?bool $siege_bebe = null;

    #[ORM\Column]
    private ?bool $GPS = null;

    #[ORM\Column]
    private ?bool $lavage_vehicule = null;

    #[ORM\Column]
    private ?bool $conducteur_additionnel = null;

    #[ORM\Column]
    private ?bool $climatisation = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $marque = null;

    #[ORM\Column(length: 255)]
    private ?string $modele = null;

    #[ORM\Column(length: 255)]
    private ?string $chevaux = null;

    #[ORM\Column(length: 255)]
    private ?string $tarif = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreSiege(): ?string
    {
        return $this->nombre_siege;
    }

    public function setNombreSiege(string $nombre_siege): self
    {
        $this->nombre_siege = $nombre_siege;

        return $this;
    }

    public function getBoiteVitesse(): ?string
    {
        return $this->boite_vitesse;
    }

    public function setBoiteVitesse(string $boite_vitesse): self
    {
        $this->boite_vitesse = $boite_vitesse;

        return $this;
    }

    public function getEssence(): ?string
    {
        return $this->Essence;
    }

    public function setEssence(string $Essence): self
    {
        $this->Essence = $Essence;

        return $this;
    }

    public function isSiegeBebe(): ?bool
    {
        return $this->siege_bebe;
    }

    public function setSiegeBebe(bool $siege_bebe): self
    {
        $this->siege_bebe = $siege_bebe;

        return $this;
    }

    public function isGPS(): ?bool
    {
        return $this->GPS;
    }

    public function setGPS(bool $GPS): self
    {
        $this->GPS = $GPS;

        return $this;
    }

    public function isLavageVehicule(): ?bool
    {
        return $this->lavage_vehicule;
    }

    public function setLavageVehicule(bool $lavage_vehicule): self
    {
        $this->lavage_vehicule = $lavage_vehicule;

        return $this;
    }

    public function isConducteurAdditionnel(): ?bool
    {
        return $this->conducteur_additionnel;
    }

    public function setConducteurAdditionnel(bool $conducteur_additionnel): self
    {
        $this->conducteur_additionnel = $conducteur_additionnel;

        return $this;
    }

    public function isClimatisation(): ?bool
    {
        return $this->climatisation;
    }

    public function setClimatisation(bool $climatisation): self
    {
        $this->climatisation = $climatisation;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getChevaux(): ?string
    {
        return $this->chevaux;
    }

    public function setChevaux(string $chevaux): self
    {
        $this->chevaux = $chevaux;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(string $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
