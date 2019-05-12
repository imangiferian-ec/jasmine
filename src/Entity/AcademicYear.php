<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="academic_years")
 * @ORM\Entity(repositoryClass="App\Repository\AcademicYearRepository")
 */
class AcademicYear
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $ayStartYear;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $ayEndYear;

    /**
     * @ORM\Column(type="boolean", options={"default":1})
     */
    private $isActiveAY;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isAcceptingExaminee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAyStartYear(): ?string
    {
        return $this->ayStartYear;
    }

    public function setAyStartYear(string $ayStartYear): self
    {
        $this->ayStartYear = $ayStartYear;

        return $this;
    }

    public function getAyEndYear(): ?string
    {
        return $this->ayEndYear;
    }

    public function setAyEndYear(string $ayEndYear): self
    {
        $this->ayEndYear = $ayEndYear;

        return $this;
    }

    public function getIsActiveAY(): ?string
    {
        return $this->isActiveAY;
    }

    public function setIsActiveAY(string $isActiveAY): self
    {
        $this->isActiveAY = isActiveAY;

        return $this;
    }

    public function getIsAcceptingExaminee(): ?bool
    {
        return $this->isAcceptingExaminee;
    }

    public function setIsAcceptingExaminee(bool $isAcceptingExaminee): self
    {
        $this->isAcceptingExaminee = $isAcceptingExaminee;

        return $this;
    }

    public function __toString(){
        // to show the name of the Category in the select
        return $this->ayStartYear . ' - ' . $this->ayEndYear;
        // to show the id of the Category in the select
        // return $this->id;
    }

}
