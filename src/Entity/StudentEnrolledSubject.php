<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="student_enrolled_subjects")
 * @ORM\Entity(repositoryClass="App\Repository\StudentEnrolledSubjectRepository")
 */
class StudentEnrolledSubject
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Student")
     * @ORM\JoinColumn(nullable=false)
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SubjectOffering")
     * @ORM\JoinColumn(nullable=false)
     */
    private $subjectOffering;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EnrollmentDetails")
     * @ORM\JoinColumn(nullable=false)
     */
    private $enrollmentDetail;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AcademicYearInstance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $academicYearInstance;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEnrolled;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isAddedSubject;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSubjectOffering(): ?SubjectOffering
    {
        return $this->subjectOffering;
    }

    public function setSubjectOffering(?SubjectOffering $subjectOffering): self
    {
        $this->subjectOffering = $subjectOffering;

        return $this;
    }

    public function getEnrollmentDetail(): ?EnrollmentDetails
    {
        return $this->enrollmentDetail;
    }

    public function setEnrollmentDetail(?EnrollmentDetails $enrollmentDetail): self
    {
        $this->enrollmentDetail = $enrollmentDetail;

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

    public function getDateEnrolled(): ?\DateTimeInterface
    {
        return $this->dateEnrolled;
    }

    public function setDateEnrolled(\DateTimeInterface $dateEnrolled): self
    {
        $this->dateEnrolled = $dateEnrolled;

        return $this;
    }

    public function getIsAddedSubject(): ?bool
    {
        return $this->isAddedSubject;
    }

    public function setIsAddedSubject(bool $isAddedSubject): self
    {
        $this->isAddedSubject = $isAddedSubject;

        return $this;
    }
}
