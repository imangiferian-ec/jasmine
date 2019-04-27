<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CurriculumSubjectPrerequisiteRepository")
 */
class CurriculumSubjectPrerequisite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CurriculumSubject")
     * @ORM\JoinColumn(nullable=false)
     */
    private $curriculumSubject;

    /**
     * @ORM\Column(type="json")
     */
    private $subjectPrerequisite = [];

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remarks;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurriculumSubject(): ?CurriculumSubject
    {
        return $this->curriculumSubject;
    }

    public function setCurriculumSubject(?CurriculumSubject $curriculumSubject): self
    {
        $this->curriculumSubject = $curriculumSubject;

        return $this;
    }

    public function getSubjectPrerequisite(): ?array
    {
        return $this->subjectPrerequisite;
    }

    public function setSubjectPrerequisite(array $subjectPrerequisite): self
    {
        $this->subjectPrerequisite = $subjectPrerequisite;

        return $this;
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(?string $remarks): self
    {
        $this->remarks = $remarks;

        return $this;
    }
}
