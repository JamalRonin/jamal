<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionUne;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionDeux;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionTrois;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionQuatre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionSix;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionCinq;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionSept;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionHuit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $class;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescriptionUne(): ?string
    {
        return $this->descriptionUne;
    }

    public function setDescriptionUne(?string $descriptionUne): self
    {
        $this->descriptionUne = $descriptionUne;

        return $this;
    }

    public function getDescriptionDeux(): ?string
    {
        return $this->descriptionDeux;
    }

    public function setDescriptionDeux(?string $descriptionDeux): self
    {
        $this->descriptionDeux = $descriptionDeux;

        return $this;
    }

    public function getDescriptionTrois(): ?string
    {
        return $this->descriptionTrois;
    }

    public function setDescriptionTrois(?string $descriptionTrois): self
    {
        $this->descriptionTrois = $descriptionTrois;

        return $this;
    }

    public function getDescriptionQuatre(): ?string
    {
        return $this->descriptionQuatre;
    }

    public function setDescriptionQuatre(?string $descriptionQuatre): self
    {
        $this->descriptionQuatre = $descriptionQuatre;

        return $this;
    }

    public function getDescriptionSix(): ?string
    {
        return $this->descriptionSix;
    }

    public function setDescriptionSix(?string $descriptionSix): self
    {
        $this->descriptionSix = $descriptionSix;

        return $this;
    }

    public function getDescriptionCinq(): ?string
    {
        return $this->descriptionCinq;
    }

    public function setDescriptionCinq(?string $descriptionCinq): self
    {
        $this->descriptionCinq = $descriptionCinq;

        return $this;
    }

    public function getDescriptionSept(): ?string
    {
        return $this->descriptionSept;
    }

    public function setDescriptionSept(?string $descriptionSept): self
    {
        $this->descriptionSept = $descriptionSept;

        return $this;
    }

    public function getDescriptionHuit(): ?string
    {
        return $this->descriptionHuit;
    }

    public function setDescriptionHuit(?string $descriptionHuit): self
    {
        $this->descriptionHuit = $descriptionHuit;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(?string $class): self
    {
        $this->class = $class;

        return $this;
    }
}
