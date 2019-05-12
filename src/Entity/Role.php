<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="roles")
 * @ORM\Entity(repositoryClass="App\Repository\RoleRepository")
 */
class Role
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
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PermissionList")
     * @ORM\JoinColumn(nullable=false)
     */
    private $landingPage;

    /**
     * @ORM\Column(type="boolean", options={"default" : 1})
     */
    private $isActiveRole;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getLandingPage(): ?PermissionList
    {
        return $this->landingPage;
    }

    public function setLandingPage(?PermissionList $landingPage): self
    {
        $this->landingPage = $landingPage;

        return $this;
    }

    public function getIsActiveRole(): ?bool
    {
        return $this->isActiveRole;
    }

    public function setIsActiveRole(bool $isActiveRole): self
    {
        $this->isActiveRole = $isActiveRole;

        return $this;
    }

    public function __toString() {
        return $this->name;
    }
}
