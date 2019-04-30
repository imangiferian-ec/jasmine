<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="added_loads")
 * @ORM\Entity(repositoryClass="App\Repository\AddedProfLoadRepository")
 */
class AddedProfLoad
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SubjectOffering")
     * @ORM\JoinColumn(nullable=false)
     */
    private $subjectOffering;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Employee")
     * @ORM\JoinColumn(nullable=false)
     */
    private $professor;

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

    public function getId(): ?int
    {
        return $this->id;
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

    public function getProfessor(): ?Employee
    {
        return $this->professor;
    }

    public function setProfessor(?Employee $professor): self
    {
        $this->professor = $professor;

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

    public function getSemester(): ?Semester
    {
        return $this->semester;
    }

    public function setSemester(?Semester $semester): self
    {
        $this->semester = $semester;

        return $this;
    }
}
