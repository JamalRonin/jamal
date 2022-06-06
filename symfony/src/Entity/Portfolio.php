<?php

namespace App\Entity;

use App\Repository\PortfolioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PortfolioRepository::class)
 */
class Portfolio
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nav;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dataFilter;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $h4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $p;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNav(): ?string
    {
        return $this->nav;
    }

    public function setNav(?string $nav): self
    {
        $this->nav = $nav;

        return $this;
    }

    public function getDataFilter(): ?string
    {
        return $this->dataFilter;
    }

    public function setDataFilter(?string $dataFilter): self
    {
        $this->dataFilter = $dataFilter;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getH4(): ?string
    {
        return $this->h4;
    }

    public function setH4(?string $h4): self
    {
        $this->h4 = $h4;

        return $this;
    }

    public function getP(): ?string
    {
        return $this->p;
    }

    public function setP(?string $p): self
    {
        $this->p = $p;

        return $this;
    }
}
