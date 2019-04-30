<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="sections")
 * @ORM\Entity(repositoryClass="App\Repository\SectionRepository")
 */
class Section
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Curriculum")
     * @ORM\JoinColumn(nullable=false)
     */
    private $curriculum;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $sectionCode;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $sectionName;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Course")
     * @ORM\JoinColumn(nullable=false)
     */
    private $course;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AcademicYearInstance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $academicYearInstance;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $shift;

    /**
     * @ORM\Column(type="smallint")
     */
    private $maxNoStudent;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurriculum(): ?Curriculum
    {
        return $this->curriculum;
    }

    public function setCurriculum(?Curriculum $curriculum): self
    {
        $this->curriculum = $curriculum;

        return $this;
    }

    public function getSectionCode(): ?string
    {
        return $this->sectionCode;
    }

    public function setSectionCode(string $sectionCode): self
    {
        $this->sectionCode = $sectionCode;

        return $this;
    }

    public function getSectionName(): ?string
    {
        return $this->sectionName;
    }

    public function setSectionName(string $sectionName): self
    {
        $this->sectionName = $sectionName;

        return $this;
    }

    public function getCourse(): ?Course
    {
        return $this->course;
    }

    public function setCourse(?Course $course): self
    {
        $this->course = $course;

        return $this;
    }

    public function getAcademicYearInstance(): ?AcademicYearInstance
    {
        return $this->academicYearInstance;
    }

    public function setAcademicYearInstance(?AcademicYearInstance $academicYearInstance): self
    {
        $this->academicYearInstance = $academicYearInstance;

        return $this;
    }

    public function getShift(): ?string
    {
        return $this->shift;
    }

    public function setShift(string $shift): self
    {
        $this->shift = $shift;

        return $this;
    }

    public function getMaxNoStudent(): ?int
    {
        return $this->maxNoStudent;
    }

    public function setMaxNoStudent(int $maxNoStudent): self
    {
        $this->maxNoStudent = $maxNoStudent;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
