<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="student_profiling_details")
 * @ORM\Entity(repositoryClass="App\Repository\StudentProfilingDetailsRepository")
 */
class StudentProfilingDetails
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateProfiled;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Student")
     * @ORM\JoinColumn(nullable=false)
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Course")
     * @ORM\JoinColumn(nullable=false)
     */
    private $course;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Curriculum")
     * @ORM\JoinColumn(nullable=false)
     */
    private $curriculum;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AcademicYearInstance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $academicYearInstance;

    /**
     * @ORM\Column(type="text")
     */
    private $remarks;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Employee")
     * @ORM\JoinColumn(nullable=false)
     */
    private $profiler;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateProfiled(): ?\DateTimeInterface
    {
        return $this->dateProfiled;
    }

    public function setDateProfiled(\DateTimeInterface $dateProfiled): self
    {
        $this->dateProfiled = $dateProfiled;

        return $this;
    }

    public function getStudent(): ?Student
    {
        return $this->student;
    }

    public function setStudent(?Student $student): self
    {
        $this->student = $student;

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

    public function getCurriculum(): ?Curriculum
    {
        return $this->curriculum;
    }

    public function setCurriculum(?Curriculum $curriculum): self
    {
        $this->curriculum = $curriculum;

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

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(string $remarks): self
    {
        $this->remarks = $remarks;

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

    public function getProfiler(): ?Employee
    {
        return $this->profiler;
    }

    public function setProfiler(?Employee $profiler): self
    {
        $this->profiler = $profiler;

        return $this;
    }
}
