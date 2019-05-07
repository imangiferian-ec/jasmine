<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="system_modules")
 * @ORM\Entity(repositoryClass="App\Repository\SystemModuleRepository")
 */
class SystemModule
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
    private $moduleName;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="json")
     */
    private $alowedRoles = [];

    /**
     * @ORM\Column(type="smallint")
     */
    private $position;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PermissionList", mappedBy="module")
     */
    private $no;

    public function __construct()
    {
        $this->no = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModuleName(): ?string
    {
        return $this->moduleName;
    }

    public function setModuleName(string $moduleName): self
    {
        $this->moduleName = $moduleName;

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

    public function getAlowedRoles(): ?array
    {
        return $this->alowedRoles;
    }

    public function setAlowedRoles(array $alowedRoles): self
    {
        $this->alowedRoles = $alowedRoles;

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

    /**
     * @return Collection|PermissionList[]
     */
    public function getNo(): Collection
    {
        return $this->no;
    }

    public function addNo(PermissionList $no): self
    {
        if (!$this->no->contains($no)) {
            $this->no[] = $no;
            $no->setModule($this);
        }

        return $this;
    }

    public function removeNo(PermissionList $no): self
    {
        if ($this->no->contains($no)) {
            $this->no->removeElement($no);
            // set the owning side to null (unless already changed)
            if ($no->getModule() === $this) {
                $no->setModule(null);
            }
        }

        return $this;
    }
}
