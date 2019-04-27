<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StudentRepository")
 */
class Student
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $studentNo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $middleName;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $extensionName;

    /**
     * @ORM\Column(type="text")
     */
    private $address;

    /**
     * @ORM\Column(type="text")
     */
    private $barangay;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $contactNo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $gender;

    /**
     * @ORM\Column(type="date")
     */
    private $birthDate;

    /**
     * @ORM\Column(type="text")
     */
    private $birthPlace;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $civilStatus;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $religion;

    /**
     * @ORM\Column(type="smallint")
     */
    private $height;

    /**
     * @ORM\Column(type="smallint")
     */
    private $weight;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AcademicYearInstance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $academicYearInstance;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $yearProfiled;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fatherName;

    /**
     * @ORM\Column(type="text")
     */
    private $fatherOccupation;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $motherName;

    /**
     * @ORM\Column(type="text")
     */
    private $motherOccupation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $guadian;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $relationGuardian;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $guardianContactNo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $maidenName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $voter_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $personToNotify;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $status;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\StudentExaminee", inversedBy="student", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $studentExaminee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentNo(): ?string
    {
        return $this->studentNo;
    }

    public function setStudentNo(string $studentNo): self
    {
        $this->studentNo = $studentNo;

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

    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function getExtensionName(): ?string
    {
        return $this->extensionName;
    }

    public function setExtensionName(?string $extensionName): self
    {
        $this->extensionName = $extensionName;

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

    public function getBarangay(): ?string
    {
        return $this->barangay;
    }

    public function setBarangay(string $barangay): self
    {
        $this->barangay = $barangay;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getCivilStatus(): ?string
    {
        return $this->civilStatus;
    }

    public function setCivilStatus(string $civilStatus): self
    {
        $this->civilStatus = $civilStatus;

        return $this;
    }

    public function getReligion(): ?string
    {
        return $this->religion;
    }

    public function setReligion(?string $religion): self
    {
        $this->religion = $religion;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

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

    public function getYearProfiled(): ?string
    {
        return $this->yearProfiled;
    }

    public function setYearProfiled(string $yearProfiled): self
    {
        $this->yearProfiled = $yearProfiled;

        return $this;
    }

    public function getFatherName(): ?string
    {
        return $this->fatherName;
    }

    public function setFatherName(string $fatherName): self
    {
        $this->fatherName = $fatherName;

        return $this;
    }

    public function getFatherOccupation(): ?string
    {
        return $this->fatherOccupation;
    }

    public function setFatherOccupation(string $fatherOccupation): self
    {
        $this->fatherOccupation = $fatherOccupation;

        return $this;
    }

    public function getMotherName(): ?string
    {
        return $this->motherName;
    }

    public function setMotherName(string $motherName): self
    {
        $this->motherName = $motherName;

        return $this;
    }

    public function getMotherOccupation(): ?string
    {
        return $this->motherOccupation;
    }

    public function setMotherOccupation(string $motherOccupation): self
    {
        $this->motherOccupation = $motherOccupation;

        return $this;
    }

    public function getGuadian(): ?string
    {
        return $this->guadian;
    }

    public function setGuadian(string $guadian): self
    {
        $this->guadian = $guadian;

        return $this;
    }

    public function getRelationGuardian(): ?string
    {
        return $this->relationGuardian;
    }

    public function setRelationGuardian(string $relationGuardian): self
    {
        $this->relationGuardian = $relationGuardian;

        return $this;
    }

    public function getGuardianContactNo(): ?string
    {
        return $this->guardianContactNo;
    }

    public function setGuardianContactNo(string $guardianContactNo): self
    {
        $this->guardianContactNo = $guardianContactNo;

        return $this;
    }

    public function getMaidenName(): ?string
    {
        return $this->maidenName;
    }

    public function setMaidenName(string $maidenName): self
    {
        $this->maidenName = $maidenName;

        return $this;
    }

    public function getVoterId(): ?string
    {
        return $this->voter_id;
    }

    public function setVoterId(string $voter_id): self
    {
        $this->voter_id = $voter_id;

        return $this;
    }

    public function getPersonToNotify(): ?string
    {
        return $this->personToNotify;
    }

    public function setPersonToNotify(string $personToNotify): self
    {
        $this->personToNotify = $personToNotify;

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

    public function getStudentExaminee(): ?StudentExaminee
    {
        return $this->studentExaminee;
    }

    public function setStudentExaminee(StudentExaminee $studentExaminee): self
    {
        $this->studentExaminee = $studentExaminee;

        return $this;
    }
}
