<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="student_examinees")
 * @ORM\Entity(repositoryClass="App\Repository\StudentExamineeRepository")
 */
class StudentExaminee
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
    private $examineeNo;

    /**
     * @ORM\Column(type="date")
     */
    private $examinationDate;

    /**
     * @ORM\Column(type="text")
     */
    private $venue;

    /**
     * @ORM\Column(type="time")
     */
    private $examinationTime;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $middleName;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $extentionName;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $contactNo;

    /**
     * @ORM\Column(type="date")
     */
    private $birthDate;

    /**
     * @ORM\Column(type="text")
     */
    private $birthPlace;

    /**
     * @ORM\Column(type="text")
     */
    private $address;

    /**
     * @ORM\Column(type="text")
     */
    private $lastSchoolAttended;

    /**
     * @ORM\Column(type="text")
     */
    private $lastSchoolAddress;

    /**
     * @ORM\Column(type="integer")
     */
    private $examinationScore;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $profilingStatus;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Student", mappedBy="studentExaminee", cascade={"persist", "remove"})
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Course")
     * @ORM\JoinColumn(nullable=false)
     */
    private $firstCourse;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Course")
     */
    private $secondCourse;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AcademicYear")
     * @ORM\JoinColumn(nullable=false)
     */
    private $academicYear;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExamineeNo(): ?string
    {
        return $this->examineeNo;
    }

    public function setExamineeNo(string $examineeNo): self
    {
        $this->examineeNo = $examineeNo;

        return $this;
    }

    public function getExaminationDate(): ?\DateTimeInterface
    {
        return $this->examinationDate;
    }

    public function setExaminationDate(\DateTimeInterface $examinationDate): self
    {
        $this->examinationDate = $examinationDate;

        return $this;
    }

    public function getVenue(): ?string
    {
        return $this->venue;
    }

    public function setVenue(string $venue): self
    {
        $this->venue = $venue;

        return $this;
    }

    public function getExaminationTime(): ?\DateTimeInterface
    {
        return $this->examinationTime;
    }

    public function setExaminationTime(\DateTimeInterface $examinationTime): self
    {
        $this->examinationTime = $examinationTime;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function getExtentionName(): ?string
    {
        return $this->extentionName;
    }

    public function setExtentionName(?string $extentionName): self
    {
        $this->extentionName = $extentionName;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getContactNo(): ?string
    {
        return $this->contactNo;
    }

    public function setContactNo(string $contactNo): self
    {
        $this->contactNo = $contactNo;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getBirthPlace(): ?string
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(string $birthPlace): self
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getLastSchoolAttended(): ?string
    {
        return $this->lastSchoolAttended;
    }

    public function setLastSchoolAttended(string $lastSchoolAttended): self
    {
        $this->lastSchoolAttended = $lastSchoolAttended;

        return $this;
    }

    public function getLastSchoolAddress(): ?string
    {
        return $this->lastSchoolAddress;
    }

    public function setLastSchoolAddress(string $lastSchoolAddress): self
    {
        $this->lastSchoolAddress = $lastSchoolAddress;

        return $this;
    }

    public function getExaminationScore(): ?int
    {
        return $this->examinationScore;
    }

    public function setExaminationScore(int $examinationScore): self
    {
        $this->examinationScore = $examinationScore;

        return $this;
    }

    public function getProfilingStatus(): ?string
    {
        return $this->profilingStatus;
    }

    public function setProfilingStatus(string $profilingStatus): self
    {
        $this->profilingStatus = $profilingStatus;

        return $this;
    }

    public function getStudent(): ?Student
    {
        return $this->student;
    }

    public function setStudent(Student $student): self
    {
        $this->student = $student;

        // set the owning side of the relation if necessary
        if ($this !== $student->getStudentExaminee()) {
            $student->setStudentExaminee($this);
        }

        return $this;
    }

    public function getFirstCourse(): ?Course
    {
        return $this->firstCourse;
    }

    public function setFirstCourse(?Course $firstCourse): self
    {
        $this->firstCourse = $firstCourse;

        return $this;
    }

    public function getSecondCourse(): ?Course
    {
        return $this->secondCourse;
    }

    public function setSecondCourse(?Course $secondCourse): self
    {
        $this->secondCourse = $secondCourse;

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
}
