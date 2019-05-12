<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="enrollment_details")
 * @ORM\Entity(repositoryClass="App\Repository\EnrollmentDetailsRepository")
 */
class EnrollmentDetails
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $studentPicture;

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
     * @ORM\ManyToOne(targetEntity="App\Entity\Section")
     * @ORM\JoinColumn(nullable=false)
     */
    private $section;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AcademicYear")
     * @ORM\JoinColumn(nullable=false)
     */
    private $academicYear;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\semester")
     * @ORM\JoinColumn(nullable=false)
     */
    private $semester;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateEnrolled;

    /**
     * @ORM\Column(type="text")
     */
    private $remarks;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isBalikAral;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isTransferee;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isCrossEnrollee;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isFullyPaid;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isMedicallyCleared;

    /**
     * @ORM\Column(type="boolean",  options={"default" : 0})
     */
    private $isFinalalized;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $enrollingOfficer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentPicture(): ?string
    {
        return $this->studentPicture;
    }

    public function setStudentPicture(?string $studentPicture): self
    {
        $this->studentPicture = $studentPicture;

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

    public function getSection(): ?Section
    {
        return $this->section;
    }

    public function setSection(?Section $section): self
    {
        $this->section = $section;

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

    public function getSemester(): ?semester
    {
        return $this->semester;
    }

    public function setSemester(?semester $semester): self
    {
        $this->semester = $semester;

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

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(string $remarks): self
    {
        $this->remarks = $remarks;

        return $this;
    }

    public function getIsBalikAral(): ?bool
    {
        return $this->isBalikAral;
    }

    public function setIsBalikAral(bool $isBalikAral): self
    {
        $this->isBalikAral = $isBalikAral;

        return $this;
    }

    public function getIsTransferee(): ?bool
    {
        return $this->isTransferee;
    }

    public function setIsTransferee(bool $isTransferee): self
    {
        $this->isTransferee = $isTransferee;

        return $this;
    }

    public function getIsCrossEnrollee(): ?bool
    {
        return $this->isCrossEnrollee;
    }

    public function setIsCrossEnrollee(bool $isCrossEnrollee): self
    {
        $this->isCrossEnrollee = $isCrossEnrollee;

        return $this;
    }

    public function getIsFullyPaid(): ?bool
    {
        return $this->isFullyPaid;
    }

    public function setIsFullyPaid(bool $isFullyPaid): self
    {
        $this->isFullyPaid = $isFullyPaid;

        return $this;
    }

    public function getIsMedicallyCleared(): ?bool
    {
        return $this->isMedicallyCleared;
    }

    public function setIsMedicallyCleared(bool $isMedicallyCleared): self
    {
        $this->isMedicallyCleared = $isMedicallyCleared;

        return $this;
    }

    public function getIsFinalalized(): ?bool
    {
        return $this->isFinalalized;
    }

    public function setIsFinalalized(bool $isFinalalized): self
    {
        $this->isFinalalized = $isFinalalized;

        return $this;
    }

    public function getEnrollingOfficer(): ?User
    {
        return $this->enrollingOfficer;
    }

    public function setEnrollingOfficer(?User $enrollingOfficer): self
    {
        $this->enrollingOfficer = $enrollingOfficer;

        return $this;
    }
}
