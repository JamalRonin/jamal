<?php

namespace App\Entity;

use App\Repository\DescriptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DescriptionRepository::class)
 */
class Description
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $experience_une;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $experience_deux;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $experience_trois;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $exeprience_quatre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $experience_cinque;

    /**
     * @ORM\ManyToOne(targetEntity=Experience::class, inversedBy="description")
     */
    private $experience;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExperienceUne(): ?string
    {
        return $this->experience_une;
    }

    public function setExperienceUne(?string $experience_une): self
    {
        $this->experience_une = $experience_une;

        return $this;
    }

    public function getExperienceDeux(): ?string
    {
        return $this->experience_deux;
    }

    public function setExperienceDeux(?string $experience_deux): self
    {
        $this->experience_deux = $experience_deux;

        return $this;
    }

    public function getExperienceTrois(): ?string
    {
        return $this->experience_trois;
    }

    public function setExperienceTrois(?string $experience_trois): self
    {
        $this->experience_trois = $experience_trois;

        return $this;
    }

    public function getExeprienceQuatre(): ?string
    {
        return $this->exeprience_quatre;
    }

    public function setExeprienceQuatre(?string $exeprience_quatre): self
    {
        $this->exeprience_quatre = $exeprience_quatre;

        return $this;
    }

    public function getExperienceCinque(): ?string
    {
        return $this->experience_cinque;
    }

    public function setExperienceCinque(?string $experience_cinque): self
    {
        $this->experience_cinque = $experience_cinque;

        return $this;
    }

    public function getExperience(): ?Experience
    {
        return $this->experience;
    }

    public function setExperience(?Experience $experience): self
    {
        $this->experience = $experience;

        return $this;
    }
}
