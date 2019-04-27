<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BuildingRepository")
 */
class Building
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $buildingCode;

    /**
     * @ORM\Column(type="text")
     */
    private $buildingName;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBuildingCode(): ?string
    {
        return $this->buildingCode;
    }

    public function setBuildingCode(string $buildingCode): self
    {
        $this->buildingCode = $buildingCode;

        return $this;
    }

    public function getBuildingName(): ?string
    {
        return $this->buildingName;
    }

    public function setBuildingName(string $buildingName): self
    {
        $this->buildingName = $buildingName;

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
}
