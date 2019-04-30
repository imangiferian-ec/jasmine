<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="subject_offerings")
 * @ORM\Entity(repositoryClass="App\Repository\SubjectOfferingRepository")
 */
class SubjectOffering
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
     * @ORM\ManyToOne(targetEntity="App\Entity\AcademicYearInstance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $academicYearInstance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $labday;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $labdayTime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lectureDay;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lectureDayTime;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Course")
     * @ORM\JoinColumn(nullable=false)
     */
    private $course;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Section")
     * @ORM\JoinColumn(nullable=false)
     */
    private $section;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CurriculumSubject")
     * @ORM\JoinColumn(nullable=false)
     */
    private $curriculumSubject;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Room")
     * @ORM\JoinColumn(nullable=false)
     */
    private $room;

    /**
     * @ORM\Column(type="smallint")
     */
    private $allowedNoStudent;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gradeSubmittedBy;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gradeFinalizedBy;

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

    public function getAcademicYearInstance(): ?AcademicYearInstance
    {
        return $this->academicYearInstance;
    }

    public function setAcademicYearInstance(?AcademicYearInstance $academicYearInstance): self
    {
        $this->academicYearInstance = $academicYearInstance;

        return $this;
    }

    public function getLabday(): ?string
    {
        return $this->labday;
    }

    public function setLabday(string $labday): self
    {
        $this->labday = $labday;

        return $this;
    }

    public function getLabdayTime(): ?string
    {
        return $this->labdayTime;
    }

    public function setLabdayTime(string $labdayTime): self
    {
        $this->labdayTime = $labdayTime;

        return $this;
    }

    public function getLectureDay(): ?string
    {
        return $this->lectureDay;
    }

    public function setLectureDay(string $lectureDay): self
    {
        $this->lectureDay = $lectureDay;

        return $this;
    }

    public function getLectureDayTime(): ?string
    {
        return $this->lectureDayTime;
    }

    public function setLectureDayTime(string $lectureDayTime): self
    {
        $this->lectureDayTime = $lectureDayTime;

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

    public function getSection(): ?Section
    {
        return $this->section;
    }

    public function setSection(?Section $section): self
    {
        $this->section = $section;

        return $this;
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

    public function getRoom(): ?Room
    {
        return $this->room;
    }

    public function setRoom(?Room $room): self
    {
        $this->room = $room;

        return $this;
    }

    public function getAllowedNoStudent(): ?int
    {
        return $this->allowedNoStudent;
    }

    public function setAllowedNoStudent(int $allowedNoStudent): self
    {
        $this->allowedNoStudent = $allowedNoStudent;

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

    public function getGradeSubmittedBy(): ?User
    {
        return $this->gradeSubmittedBy;
    }

    public function setGradeSubmittedBy(?User $gradeSubmittedBy): self
    {
        $this->gradeSubmittedBy = $gradeSubmittedBy;

        return $this;
    }

    public function getGradeFinalizedBy(): ?User
    {
        return $this->gradeFinalizedBy;
    }

    public function setGradeFinalizedBy(?User $gradeFinalizedBy): self
    {
        $this->gradeFinalizedBy = $gradeFinalizedBy;

        return $this;
    }
}
