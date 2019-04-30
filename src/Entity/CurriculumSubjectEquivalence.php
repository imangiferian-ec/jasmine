<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="curriculum_subject_equivallence")
 * @ORM\Entity(repositoryClass="App\Repository\CurriculumSubjectEquivalenceRepository")
 */
class CurriculumSubjectEquivalence
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CurriculumSubject")
     * @ORM\JoinColumn(nullable=false)
     */
    private $curriculumSubject;

    /**
     * @ORM\Column(type="json")
     */
    private $subjectEquivalence = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurriculumSubject(): ?CurriculumSubject
    {
        return $this->curriculumSubject;
    }

    public function setCurriculumSubject(?CurriculumSubject $curriculumSubject): self
    {
        $this->curriculumSubject = $curriculumSubject;

        return $this;
    }

    public function getSubjectEquivalence(): ?array
    {
        return $this->subjectEquivalence;
    }

    public function setSubjectEquivalence(array $subjectEquivalence): self
    {
        $this->subjectEquivalence = $subjectEquivalence;

        return $this;
    }
}
