<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="subjects")
 * @ORM\Entity(repositoryClass="App\Repository\SubjectRepository")
 */
class Subject
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
    private $subjectCode;

    /**
     * @ORM\Column(type="text")
     */
    private $subjectTitle;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="smallint")
     */
    private $units;

    /**
     * @ORM\Column(type="float")
     */
    private $lectureHour;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $labHour;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Department")
     * @ORM\JoinColumn(nullable=false)
     */
    private $department;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Course")
     * @ORM\JoinColumn(nullable=true)
     */
    private $course;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubjectCode(): ?string
    {
        return $this->subjectCode;
    }

    public function setSubjectCode(string $subjectCode): self
    {
        $this->subjectCode = $subjectCode;

        return $this;
    }

    public function getSubjectTitle(): ?string
    {
        return $this->subjectTitle;
    }

    public function setSubjectTitle(string $subjectTitle): self
    {
        $this->subjectTitle = $subjectTitle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getUnits(): ?int
    {
        return $this->units;
    }

    public function setUnits(int $units): self
    {
        $this->units = $units;

        return $this;
    }

    public function getLectureHour(): ?float
    {
        return $this->lectureHour;
    }

    public function setLectureHour(float $lectureHour): self
    {
        $this->lectureHour = $lectureHour;

        return $this;
    }

    public function getLabHour(): ?float
    {
        return $this->labHour;
    }

    public function setLabHour(?float $labHour): self
    {
        $this->labHour = $labHour;

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
