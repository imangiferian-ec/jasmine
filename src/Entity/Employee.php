<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeRepository")
 */
class Employee
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
    private $employeeNo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Department")
     * @ORM\JoinColumn(nullable=false)
     */
    private $department;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $employeeImage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titlePrefix;

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
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $titleSuffix;

    /**
     * @ORM\Column(type="text")
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $contactNo;

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
     * @ORM\Column(type="string", length=30)
     */
    private $civilStatus;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $maidenName;

    /**
     * @ORM\Column(type="smallint")
     */
    private $height;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $weight;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $religion;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEmployed;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $status;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isFaculty;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployeeNo(): ?string
    {
        return $this->employeeNo;
    }

    public function setEmployeeNo(string $employeeNo): self
    {
        $this->employeeNo = $employeeNo;

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->department;
    }

    public function setDepartment(?Department $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getEmployeeImage(): ?string
    {
        return $this->employeeImage;
    }

    public function setEmployeeImage(?string $employeeImage): self
    {
        $this->employeeImage = $employeeImage;

        return $this;
    }

    public function getTitlePrefix(): ?string
    {
        return $this->titlePrefix;
    }

    public function setTitlePrefix(?string $titlePrefix): self
    {
        $this->titlePrefix = $titlePrefix;

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

    public function getTitleSuffix(): ?string
    {
        return $this->titleSuffix;
    }

    public function setTitleSuffix(?string $titleSuffix): self
    {
        $this->titleSuffix = $titleSuffix;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getMaidenName(): ?string
    {
        return $this->maidenName;
    }

    public function setMaidenName(?string $maidenName): self
    {
        $this->maidenName = $maidenName;

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

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

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

    public function getDateEmployed(): ?\DateTimeInterface
    {
        return $this->dateEmployed;
    }

    public function setDateEmployed(\DateTimeInterface $dateEmployed): self
    {
        $this->dateEmployed = $dateEmployed;

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

    public function getIsFaculty(): ?bool
    {
        return $this->isFaculty;
    }

    public function setIsFaculty(bool $isFaculty): self
    {
        $this->isFaculty = $isFaculty;

        return $this;
    }
}
