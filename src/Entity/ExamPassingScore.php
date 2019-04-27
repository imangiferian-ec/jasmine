<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExamPassingScoreRepository")
 */
class ExamPassingScore
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $score;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\AcademicYear", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $academicYear;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getAcademicYear(): ?AcademicYear
    {
        return $this->academicYear;
    }

    public function setAcademicYear(AcademicYear $academicYear): self
    {
        $this->academicYear = $academicYear;

        return $this;
    }
}
