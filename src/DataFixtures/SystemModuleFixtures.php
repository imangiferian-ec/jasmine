<?php

namespace App\DataFixtures;

use App\Entity\SystemModule;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SystemModuleFixtures extends Fixture
{
    public const SYSTEM_MODULE_UM = 'user management';
    public const SYSTEM_MODULE_US = 'university setting';
    public const SYSTEM_MODULE_AI = 'academic instance';
    public const SYSTEM_MODULE_CM = 'curriculum management and build-up';
    public const SYSTEM_MODULE_PROFILING = 'profiling';
    public const SYSTEM_MODULE_SSS = 'sectioning and subject schedules';
    public const SYSTEM_MODULE_ENROLLMENT = 'enrollment';
    public const SYSTEM_MODULE_FACULTY_LOADING = 'faculty loading';
    public const SYSTEM_MODULE_GRADING = 'grading';
    public const SYSTEM_MODULE_GRADUATION = 'graduation';

    public function load(ObjectManager $manager)
    {
        $userManagement = new SystemModule();
        $userManagement->setModuleName('user management')
                ->setDescription('module for managing user related functionality')
                ->setAlowedRoles(["ROLE_ADMIN"])
                ->setPosition(1);
        $manager->persist($userManagement);

        $universitySettings = new SystemModule();
        $universitySettings->setModuleName('university settings')
                ->setDescription('module related to setting up University information and resources')
                ->setAlowedRoles(["ROLE_ADMIN"])
                ->setPosition(2);
        $manager->persist($universitySettings);

        $curriculumManagement = new SystemModule();
        $curriculumManagement->setModuleName('curriculum management and build-up')
                ->setDescription('module for managing curriculums')
                ->setAlowedRoles(["ROLE_ADMIN"])
                ->setPosition(3);
        $manager->persist($curriculumManagement);

        $academicInstance = new SystemModule();
        $academicInstance->setModuleName('academic instance')
                ->setDescription('module creating academic instances')
                ->setAlowedRoles(["ROLE_ADMIN"])
                ->setPosition(4);
        $manager->persist($academicInstance);

        $profiling = new SystemModule();
        $profiling->setModuleName('profiling')
                ->setDescription('All function related to managing student and employee profile is in this module')
                ->setAlowedRoles(["ROLE_ADMIN"])
                ->setPosition(5);
        $manager->persist($profiling);

        $sectioningSujectSchedule = new SystemModule();
        $sectioningSujectSchedule->setModuleName('sectioning and subject schedules')
                ->setDescription('module for managing schedules and sections')
                ->setAlowedRoles(["ROLE_ADMIN"])
                ->setPosition(6);
        $manager->persist($sectioningSujectSchedule);

        $enrollment = new SystemModule();
        $enrollment->setModuleName('enrollment')
                ->setDescription('module for all enrollment related functionality')
                ->setAlowedRoles(["ROLE_ADMIN"])
                ->setPosition(7);
        $manager->persist($enrollment);

        $facultyLoading = new SystemModule();
        $facultyLoading->setModuleName('faculty loading')
                ->setDescription('module faculty loading')
                ->setAlowedRoles(["ROLE_ADMIN"])
                ->setPosition(8);
        $manager->persist($facultyLoading);

        $grading = new SystemModule();
        $grading->setModuleName('grading')
                ->setDescription('module for managing student grades')
                ->setAlowedRoles(["ROLE_ADMIN"])
                ->setPosition(9);
        $manager->persist($grading);

        $graduation = new SystemModule();
        $graduation->setModuleName('graduation')
                ->setDescription('module for graduation related function. E.g. Application of graduation')
                ->setAlowedRoles(["ROLE_ADMIN"])
                ->setPosition(10);
        $manager->persist($graduation);

        $manager->flush();

        $this->addReference(self::SYSTEM_MODULE_UM, $userManagement);
        $this->addReference(self::SYSTEM_MODULE_US, $universitySettings);
        $this->addReference(self::SYSTEM_MODULE_AI, $academicInstance);
        $this->addReference(self::SYSTEM_MODULE_CM, $curriculumManagement);
        $this->addReference(self::SYSTEM_MODULE_PROFILING, $profiling);
        $this->addReference(self::SYSTEM_MODULE_SSS, $sectioningSujectSchedule);
        $this->addReference(self::SYSTEM_MODULE_ENROLLMENT, $enrollment);
        $this->addReference(self::SYSTEM_MODULE_FACULTY_LOADING, $facultyLoading);
        $this->addReference(self::SYSTEM_MODULE_GRADING, $grading);
        $this->addReference(self::SYSTEM_MODULE_GRADUATION, $graduation);

    }

    public function getOrder(){
      return 1000;
    }
}
