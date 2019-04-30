<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="courses")
 * @ORM\Entity(repositoryClass="App\Repository\CourseRepository")
 */
class Course
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
    private $course_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $courseTitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $degree;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $major;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\College", inversedBy="courses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $college;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCourseCode(): ?string
    {
        return $this->course_code;
    }

    public function setCourseCode(string $course_code): self
    {
        $this->course_code = $course_code;

        return $this;
    }

    public function getCourseTitle(): ?string
    {
        return $this->courseTitle;
    }

    public function setCourseTitle(string $courseTitle): self
    {
        $this->courseTitle = $courseTitle;

        return $this;
    }

    public function getDegree(): ?string
    {
        return $this->degree;
    }

    public function setDegree(string $degree): self
    {
        $this->degree = $degree;

        return $this;
    }

    public function getMajor(): ?string
    {
        return $this->major;
    }

    public function setMajor(?string $major): self
    {
        $this->major = $major;

        return $this;
    }

    public function getCollege(): ?College
    {
        return $this->college;
    }

    public function setCollege(?College $college): self
    {
        $this->college = $college;

        return $this;
    }
}
