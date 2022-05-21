<?php

namespace App\Entity;

use App\Repository\InterestsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterestsRepository::class)
 */
class Interests
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkIcon;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLinkIcon(): ?string
    {
        return $this->linkIcon;
    }

    public function setLinkIcon(?string $linkIcon): self
    {
        $this->linkIcon = $linkIcon;

        return $this;
    }
}
