<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="academic_year_instances")
 * @ORM\Entity(repositoryClass="App\Repository\AcademicYearInstanceRepository")
 */
class AcademicYearInstance
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AcademicYear")
     * @ORM\JoinColumn(nullable=false)
     */
    private $academicYear;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Semester")
     * @ORM\JoinColumn(nullable=false)
     */
    private $semester;

    /**
     * @ORM\Column(type="date")
     */
    private $semesterStartDate;

    /**
     * @ORM\Column(type="date")
     */
    private $enrollmentStartDate;

    /**
     * @ORM\Column(type="date")
     */
    private $enrollmentEndDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remarks;

    /**
     * @ORM\Column(type="boolean", options={"default":1})
     */
    private $isActiveAYI;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSemester(): ?Semester
    {
        return $this->semester;
    }

    public function setSemester(?Semester $semester): self
    {
        $this->semester = $semester;

        return $this;
    }

    public function getSemesterStartDate(): ?\DateTimeInterface
    {
        return $this->semesterStartDate;
    }

    public function setSemesterStartDate(\DateTimeInterface $semesterStartDate): self
    {
        $this->semesterStartDate = $semesterStartDate;

        return $this;
    }

    public function getEnrollmentStartDate(): ?\DateTimeInterface
    {
        return $this->enrollmentStartDate;
    }

    public function setEnrollmentStartDate(\DateTimeInterface $enrollmentStartDate): self
    {
        $this->enrollmentStartDate = $enrollmentStartDate;

        return $this;
    }

    public function getEnrollmentEndDate(): ?\DateTimeInterface
    {
        return $this->enrollmentEndDate;
    }

    public function setEnrollmentEndDate(\DateTimeInterface $enrollmentEndDate): self
    {
        $this->enrollmentEndDate = $enrollmentEndDate;

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

    public function getIsActiveAYI(): ?string
    {
        return $this->isActiveAYI;
    }

    public function setIsActiveAYI(string $isActiveAYI): self
    {
        $this->isActiveAYI = $isActiveAYI;

        return $this;
    }
}
