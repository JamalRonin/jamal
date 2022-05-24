<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExperienceRepository::class)
 */
class Experience
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $titre_experience;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $aannee;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $lieu;

    /**
     * @ORM\ManyToOne(targetEntity=Cv::class, inversedBy="experience")
     */
    private $cv;

    /**
     * @ORM\OneToMany(targetEntity=Description::class, mappedBy="experience")
     */
    private $description;

    public function __construct()
    {
        $this->description = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreExperience(): ?string
    {
        return $this->titre_experience;
    }

    public function setTitreExperience(?string $titre_experience): self
    {
        $this->titre_experience = $titre_experience;

        return $this;
    }

    public function getAannee(): ?string
    {
        return $this->aannee;
    }

    public function setAannee(?string $aannee): self
    {
        $this->aannee = $aannee;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getCv(): ?Cv
    {
        return $this->cv;
    }

    public function setCv(?Cv $cv): self
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * @return Collection<int, Description>
     */
    public function getDescription(): Collection
    {
        return $this->description;
    }

    public function addDescription(Description $description): self
    {
        if (!$this->description->contains($description)) {
            $this->description[] = $description;
            $description->setExperience($this);
        }

        return $this;
    }

    public function removeDescription(Description $description): self
    {
        if ($this->description->removeElement($description)) {
            // set the owning side to null (unless already changed)
            if ($description->getExperience() === $this) {
                $description->setExperience(null);
            }
        }

        return $this;
    }
}
