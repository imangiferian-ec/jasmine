<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CurriculumRepository")
 */
class Curriculum
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $curriculumCode;

    /**
     * @ORM\Column(type="text")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $status;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isFinalized;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AcademicYear")
     * @ORM\JoinColumn(nullable=false)
     */
    private $academicYear;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Course")
     * @ORM\JoinColumn(nullable=false)
     */
    private $course;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurriculumCode(): ?string
    {
        return $this->curriculumCode;
    }

    public function setCurriculumCode(string $curriculumCode): self
    {
        $this->curriculumCode = $curriculumCode;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getIsFinalized(): ?bool
    {
        return $this->isFinalized;
    }

    public function setIsFinalized(bool $isFinalized): self
    {
        $this->isFinalized = $isFinalized;

        return $this;
    }

    public function getAcademicYear(): ?AcademicYear
    {
        return $this->academicYear;
    }

    public function setAcademicYear(?AcademicYear $academicYear): self
    {
        $this->academicYear = $academicYear;

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
}
