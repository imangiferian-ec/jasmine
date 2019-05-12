<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="permission_lists")
 * @ORM\Entity(repositoryClass="App\Repository\PermissionListRepository")
 */
class PermissionList
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $functionName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $route;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\Column(type="json")
     */
    private $permittedRoles = [];

    /**
     * @ORM\Column(type="smallint")
     */
    private $position;

    /**
     * @ORM\Column(type="boolean", options={"default" : 1})
     */
    private $isActive;

    /**
     * @ORM\Column(type="boolean", options={"default" : 0})
     */
    private $isSideMenu;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SystemModule", inversedBy="no")
     * @ORM\JoinColumn(nullable=false)
     */
    private $module;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFunctionName(): ?string
    {
        return $this->functionName;
    }

    public function setFunctionName(string $functionName): self
    {
        $this->functionName = $functionName;

        return $this;
    }

    public function getRoute(): ?string
    {
        return $this->route;
    }

    public function setRoute(string $route): self
    {
        $this->route = $route;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getPermittedRoles(): ?array
    {
        return $this->permittedRoles;
    }

    public function setPermittedRoles(array $permittedRoles): self
    {
        $this->permittedRoles = $permittedRoles;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getIsSideMenu(): ?bool
    {
        return $this->isSideMenu;
    }

    public function setIsSideMenu(bool $isSideMenu): self
    {
        $this->isSideMenu = $isSideMenu;

        return $this;
    }

    public function getModule(): ?SystemModule
    {
        return $this->module;
    }

    public function setModule(?SystemModule $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function __toString() {
        return $this->functionName;
    }
}
