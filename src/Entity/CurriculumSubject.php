<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="curriculum_subjects")
 * @ORM\Entity(repositoryClass="App\Repository\CurriculumSubjectRepository")
 */
class CurriculumSubject
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Curriculum")
     * @ORM\JoinColumn(nullable=false)
     */
    private $curriculum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $yearLevel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Semester")
     * @ORM\JoinColumn(nullable=false)
     */
    private $semester;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Subject")
     * @ORM\JoinColumn(nullable=false)
     */
    private $subject;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurriculum(): ?Curriculum
    {
        return $this->curriculum;
    }

    public function setCurriculum(?Curriculum $curriculum): self
    {
        $this->curriculum = $curriculum;

        return $this;
    }

    public function getYearLevel(): ?string
    {
        return $this->yearLevel;
    }

    public function setYearLevel(string $yearLevel): self
    {
        $this->yearLevel = $yearLevel;

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

    public function getSubject(): ?Subject
    {
        return $this->subject;
    }

    public function setSubject(?Subject $subject): self
    {
        $this->subject = $subject;

        return $this;
    }
}
