<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="student_grades")
 * @ORM\Entity(repositoryClass="App\Repository\StudentGradeRepository")
 */
class StudentGrade
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\StudentEnrolledSubject")
     * @ORM\JoinColumn(nullable=false)
     */
    private $studentSubjectEnrolled;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Semester")
     * @ORM\JoinColumn(nullable=false)
     */
    private $semester;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Employee")
     * @ORM\JoinColumn(nullable=false)
     */
    private $employee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentSubjectEnrolled(): ?StudentEnrolledSubject
    {
        return $this->studentSubjectEnrolled;
    }

    public function setStudentSubjectEnrolled(?StudentEnrolledSubject $studentSubjectEnrolled): self
    {
        $this->studentSubjectEnrolled = $studentSubjectEnrolled;

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

    public function getEmployee(): ?Employee
    {
        return $this->employee;
    }

    public function setEmployee(?Employee $employee): self
    {
        $this->employee = $employee;

        return $this;
    }
}
