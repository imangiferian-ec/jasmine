<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FacultyLoadRepository")
 */
class FacultyLoad
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Employee")
     * @ORM\JoinColumn(nullable=false)
     */
    private $employee;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SubjectOffering")
     * @ORM\JoinColumn(nullable=false)
     */
    private $subjectOfferring;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isGradeSubmitted;

    /**
     * @ORM\Column(type="datetime")
     */
    private $gradeSaveAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $gradeSubmittedAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $gradeUpdatedAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isGradeFinalized;

    /**
     * @ORM\Column(type="date")
     */
    private $dateGradeFinalized;

    /**
     * @ORM\Column(type="datetime")
     */
    private $gradeFinalizedAt;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSubjectOfferring(): ?SubjectOffering
    {
        return $this->subjectOfferring;
    }

    public function setSubjectOfferring(?SubjectOffering $subjectOfferring): self
    {
        $this->subjectOfferring = $subjectOfferring;

        return $this;
    }

    public function getIsGradeSubmitted(): ?bool
    {
        return $this->isGradeSubmitted;
    }

    public function setIsGradeSubmitted(bool $isGradeSubmitted): self
    {
        $this->isGradeSubmitted = $isGradeSubmitted;

        return $this;
    }

    public function getGradeSaveAt(): ?\DateTimeInterface
    {
        return $this->gradeSaveAt;
    }

    public function setGradeSaveAt(\DateTimeInterface $gradeSaveAt): self
    {
        $this->gradeSaveAt = $gradeSaveAt;

        return $this;
    }

    public function getGradeSubmittedAt(): ?\DateTimeInterface
    {
        return $this->gradeSubmittedAt;
    }

    public function setGradeSubmittedAt(\DateTimeInterface $gradeSubmittedAt): self
    {
        $this->gradeSubmittedAt = $gradeSubmittedAt;

        return $this;
    }

    public function getGradeUpdatedAt(): ?\DateTimeInterface
    {
        return $this->gradeUpdatedAt;
    }

    public function setGradeUpdatedAt(\DateTimeInterface $gradeUpdatedAt): self
    {
        $this->gradeUpdatedAt = $gradeUpdatedAt;

        return $this;
    }

    public function getIsGradeFinalized(): ?bool
    {
        return $this->isGradeFinalized;
    }

    public function setIsGradeFinalized(bool $isGradeFinalized): self
    {
        $this->isGradeFinalized = $isGradeFinalized;

        return $this;
    }

    public function getDateGradeFinalized(): ?\DateTimeInterface
    {
        return $this->dateGradeFinalized;
    }

    public function setDateGradeFinalized(\DateTimeInterface $dateGradeFinalized): self
    {
        $this->dateGradeFinalized = $dateGradeFinalized;

        return $this;
    }

    public function getGradeFinalizedAt(): ?\DateTimeInterface
    {
        return $this->gradeFinalizedAt;
    }

    public function setGradeFinalizedAt(\DateTimeInterface $gradeFinalizedAt): self
    {
        $this->gradeFinalizedAt = $gradeFinalizedAt;

        return $this;
    }
}
