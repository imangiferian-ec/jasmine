<?php

namespace App\DataFixtures;
use App\Entity\PermissionList;
use App\DataFixtures\SystemModuleFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PermissionListFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $ayList = new PermissionList();
        $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
          ->setFunctionName('AY List')
          ->setRoute('academic_year_index')
          ->setLabel('academic year list')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/academic/year/")
          ->setPosition(1)
          ->setIsActive(1)
          ->setIsSideMenu(1);
        $manager->persist($ayList);

        $ayNew = new PermissionList();
        $ayNew->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
          ->setFunctionName('Create New Academic Year')
          ->setRoute('academic_year_new')
          ->setLabel('create new academic year')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/academic/year/new")
          ->setPosition(2)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($ayNew);

        $ayShow = new PermissionList();
        $ayShow->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
          ->setFunctionName('AY Details')
          ->setRoute('academic_year_show')
          ->setLabel('academic year details')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/academic/year/{id}")
          ->setPosition(3)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($ayShow);

        $ayEdit = new PermissionList();
        $ayEdit->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
          ->setFunctionName('Modify Academic Year')
          ->setRoute('academic_year_edit')
          ->setLabel('modify academic year')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/academic/year/{id}/edit")
          ->setPosition(4)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($ayEdit);

        //                      DELETE     ANY      ANY
        $ayDelete = new PermissionList();
        $ayDelete->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
          ->setFunctionName('Delete Academic Year')
          ->setRoute('academic_year_delete')
          ->setLabel('delete academic year')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/academic/year/{id}")
          ->setPosition(5)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($ayDelete);

        $ayiList = new PermissionList();
        $ayiList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
          ->setFunctionName('Academic Year Instance List')
          ->setRoute('academic_year_instance_index')
          ->setLabel('academic year instance list')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/ay\-instance/")
          ->setPosition(1)
          ->setIsActive(1)
          ->setIsSideMenu(1);
        $manager->persist($ayiList);

        $ayiNew = new PermissionList();
        $ayiNew->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
          ->setFunctionName('New Academic Year Instance')
          ->setRoute('academic_year_instance_new')
          ->setLabel('new academic year instance')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/ay\-instance/new")
          ->setPosition(2)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($ayiNew);

        $ayiShow = new PermissionList();
        $ayiShow->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
          ->setFunctionName('Academic Year Instance Details')
          ->setRoute('academic_year_instance_show')
          ->setLabel('academic year instance details')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/ay\-instance/{id}")
          ->setPosition(3)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($ayiShow);

        $ayiEdit = new PermissionList();
        $ayiEdit->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
          ->setFunctionName('Modify Academic Year Instance')
          ->setRoute('academic_year_instance_edit')
          ->setLabel('modify academic year')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/ay\-instance/{id}/edit")
          ->setPosition(4)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($ayiEdit);

        $ayiDelete = new PermissionList();
        $ayiDelete->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
          ->setFunctionName('AY List')
          ->setRoute('academic_year_instance_delete')
          ->setLabel('delete academic year instance')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/ay\-instance/{id}")
          ->setPosition(5)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($ayiDelete);

        $facAddLoad = new PermissionList();
        $facAddLoad->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_FACULTY_LOADING))
          ->setFunctionName('Faculty Added Load')
          ->setRoute('added_prof_load_index')
          ->setLabel('Added Faculty Load')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/added\-prof\-load/")
          ->setPosition(1)
          ->setIsActive(1)
          ->setIsSideMenu(1);
        $manager->persist($facAddLoad);

        $facLoadNew = new PermissionList();
        $facLoadNew->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_FACULTY_LOADING))
          ->setFunctionName('New Faculty Load')
          ->setRoute('added_prof_load_new')
          ->setLabel('new faculty load')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/added\-prof\-load/new")
          ->setPosition(2)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($facLoadNew);

        $facAddedLoadShow = new PermissionList();
        $facAddedLoadShow->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_FACULTY_LOADING))
          ->setFunctionName('Added Load Details')
          ->setRoute('added_prof_load_show')
          ->setLabel('Added Load Details')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/added\-prof-load/{id}")
          ->setPosition(3)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($facAddedLoadShow);

        $facAddedLoadEdit =  new PermissionList();
        $facAddedLoadEdit->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_FACULTY_LOADING))
          ->setFunctionName('Modify Added Faculty Load')
          ->setRoute('added_prof_load_edit')
          ->setLabel('modify added faculty load')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/added\-prof\-load/{id}/edit")
          ->setPosition(4)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($facAddedLoadEdit);

        $facAddedLoadDelete = new PermissionList();
        $facAddedLoadDelete->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_FACULTY_LOADING))
          ->setFunctionName('Delete Added Faculty Load')
          ->setRoute('added_prof_load_delete')
          ->setLabel('delete')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/added\-prof\-load/{id}")
          ->setPosition(5)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($facAddedLoadDelete);

        $buildingList = new PermissionList();
        $buildingList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Building List')
          ->setRoute('building_index')
          ->setLabel('buildings')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/academic/year/")
          ->setPosition(1)
          ->setIsActive(1)
          ->setIsSideMenu(1);
        $manager->persist($buildingList);

        $newBuilding = new PermissionList();
        $newBuilding->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Add New Building')
          ->setRoute('building_new')
          ->setLabel('add building')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/building/new")
          ->setPosition(2)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($newBuilding);

        //                             GET        ANY      ANY    /building/{id}
        $showBuilding = new PermissionList();
        $showBuilding->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Building Detail')
          ->setRoute('building_show')
          ->setLabel('show')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/building/{id}")
          ->setPosition(3)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($showBuilding);

        //                             GET|POST   ANY      ANY    /building/{id}/edit
        $editBuilding = new PermissionList();
        $editBuilding->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Modify Building List')
          ->setRoute('building_edit')
          ->setLabel('edit')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/building/{id}/edit")
          ->setPosition(4)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($editBuilding);

        $deleteBuilding = new PermissionList();
        $deleteBuilding->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Delete Building')
          ->setRoute('building_delete')
          ->setLabel('delete')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/building/{id}")
          ->setPosition(5)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($deleteBuilding);

        $collegeList = new PermissionList();
        $collegeList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('List of Colleges')
          ->setRoute('college_index')
          ->setLabel('colleges')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/college")
          ->setPosition(1)
          ->setIsActive(1)
          ->setIsSideMenu(1);
          $manager->persist($collegeList);

        $newCollege = new PermissionList();
        $newCollege->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Create New College')
          ->setRoute('college_new')
          ->setLabel('new college')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/college/new")
          ->setPosition(2)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($newCollege);

        $showCollege = new PermissionList();
        $showCollege->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('College Details')
          ->setRoute('college_show')
          ->setLabel('details')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/college/{id}")
          ->setPosition(3)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($showCollege);

        $editCollege = new PermissionList();
        $editCollege->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Modify College Information')
          ->setRoute('college_edit')
          ->setLabel('edit')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/college/{id}/edit")
          ->setPosition(4)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($editCollege);

        $collegeDelete = new PermissionList();
        $collegeDelete->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Delete College')
          ->setRoute('college_delete')
          ->setLabel('delete')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/college/{id}")
          ->setPosition(5)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($collegeDelete);

        $courseList = new PermissionList();
        $courseList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Course List')
          ->setRoute('course_index')
          ->setLabel('courses')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/course/")
          ->setPosition(6)
          ->setIsActive(1)
          ->setIsSideMenu(1);
        $manager->persist($courseList);

        $ayList = new PermissionList();
        $addCourse->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Add New Course')
          ->setRoute('course_new')
          ->setLabel('Create New Course')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/course/new")
          ->setPosition(7)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($addCourse);

        // course_show                              GET        ANY      ANY    /course/{id}
        $courseShow = new PermissionList();
        $courseShow->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Course Details')
          ->setRoute('course_show')
          ->setLabel('details')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/course/{id}")
          ->setPosition(8)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($courseShow);

        //                               GET|POST   ANY      ANY    /course/{id}/edit
        $courseEdit = new PermissionList();
        $courseEdit->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Modify Course')
          ->setRoute('course_edit')
          ->setLabel('edit')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/course/{id}/edit")
          ->setPosition(9)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($courseEdit);

        // course_delete                            DELETE     ANY      ANY    /course/{id}
        $courseDelete = new PermissionList();
        $courseDelete->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Delete Course')
          ->setRoute('course_delete')
          ->setLabel('delete')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/course/{id}")
          ->setPosition(10)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($courseDelete);

        // curriculum_index                         GET        ANY      ANY    /curriculum/
        $curriculum = new PermissionList();
        $curriculum->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('List of Curriculum')
          ->setRoute('curriculum_index')
          ->setLabel('curriculums')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum")
          ->setPosition(1)
          ->setIsActive(1)
          ->setIsSideMenu(1);
        $manager->persist($curriculum);

        // curriculum_new                           GET|POST   ANY      ANY    /curriculum/new
        $curriculumNew = new PermissionList();
        $curriculumNew->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Create New Curriculum')
          ->setRoute('curriculum_new')
          ->setLabel('Add Curriculum')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum_new")
          ->setPosition(2)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($curriculumNew);

        // curriculum_show                          GET        ANY      ANY    /curriculum/{id}
        $showCurriculum = new PermissionList();
        $showCurriculum->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Curricum Details')
          ->setRoute('curriculum_show')
          ->setLabel('details')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/academic/year/")
          ->setPosition(3)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($showCurriculum);

        // curriculum_edit                          GET|POST   ANY      ANY    /curriculum/{id}/edit
        $curriculumEdit = new PermissionList();
        $curriculumEdit->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Modify Curriculum')
          ->setRoute('curriculum_edit')
          ->setLabel('edit')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum/{id}/edit")
          ->setPosition(4)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($curriculumEdit);
        // curriculum_delete                        DELETE     ANY      ANY    /curriculum/{id}
        $curriculumDelete = new PermissionList();
        $curriculumDelete->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Delete Curriculum')
          ->setRoute('curriculum_delete')
          ->setLabel('delete')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum/{id}")
          ->setPosition(5)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($curriculumDelete);

        // curriculum_subject_index                 GET        ANY      ANY    /curriculum-subject/
        $csIndex = new PermissionList();
        $csIndex->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Curriculum Subject List')
          ->setRoute('curriculum_subject_index')
          ->setLabel('Curriculum Subject')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject/")
          ->setPosition(6)
          ->setIsActive(1)
          ->setIsSideMenu(1);
        $manager->persist($csIndex);

        // curriculum_subject_new                   GET|POST   ANY      ANY    /curriculum-subject/new
        $cmNew = new PermissionList();
        $cmNew->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Add New Curriculum Subject')
          ->setRoute('curriculum_subject_new')
          ->setLabel('Add Curriculum Subject')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject/new")
          ->setPosition(7)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($cmNew);

        // curriculum_subject_show                  GET        ANY      ANY    /curriculum-subject/{id}
        $cmSubjectShow = new PermissionList();
        $cmSubjectShow->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Curriculum Subject Details')
          ->setRoute('curriculum_subject_show')
          ->setLabel('details')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject/{id}")
          ->setPosition(8)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($cmSubjectShow);

        // curriculum_subject_edit                  GET|POST   ANY      ANY    /curriculum-subject/{id}/edit
        $csEdit = new PermissionList();
        $csEdit->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('MOdify Curriculum Subjects')
          ->setRoute('curriculum_subject_edit')
          ->setLabel('edit')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject/{id}/edit")
          ->setPosition(9)
          ->setIsActive(1)
          ->setIsSideMenu(1);
        $manager->persist($csEdit);

        // curriculum_subject_delete                DELETE     ANY      ANY    /curriculum-subject/{id}
        $deleteCS = new PermissionList();
        $deleteCS->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Delete Curriculum Subject')
          ->setRoute('curriculum_subject_delete')
          ->setLabel('delete')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/academic/year/")
          ->setPosition(10)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($deleteCS);

        // curriculum_subject_equivalence_index     GET        ANY      ANY    /curriculum-subject-equivalence/
        $ayList = new PermissionList();
        $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Curriculum Subject - Subject Equivalence List')
          ->setRoute('curriculum_subject_equivalence_index')
          ->setLabel('subject equivalence')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject-equivalence/")
          ->setPosition(11)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($ayList);

        // curriculum_subject_equivalence_new       GET|POST   ANY      ANY    /curriculum-subject-equivalence/new
        $addCSE = new PermissionList();
        $addCSE->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Add New subject Equivalence')
          ->setRoute('curriculum_subject_equivalence_new')
          ->setLabel('add subject equivalence')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject-equivalence/new")
          ->setPosition(12)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($addCSE);

        // curriculum_subject_equivalence_show      GET        ANY      ANY    /curriculum-subject-equivalence/{id}
        $cseShow = new PermissionList();
        $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Details of Subject Equivalence')
          ->setRoute('curriculum_subject_equivalence_show')
          ->setLabel('details')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject-equivalence/{id}")
          ->setPosition(13)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($cseShow);

        // curriculum_subject_equivalence_edit      GET|POST   ANY      ANY    /curriculum-subject-equivalence/{id}/edit
        $cseEdit = new PermissionList();
        $cseEdit->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Modify Subject Equivalence')
          ->setRoute('curriculum_subject_equivalence_edit')
          ->setLabel('edit')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject-equivalence/{id}/edit")
          ->setPosition(14)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($cseEdit);

        // curriculum_subject_equivalence_delete    DELETE     ANY      ANY    /curriculum-subject-equivalence/{id}
        $cseDelete = new PermissionList();
        $cseDelete->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Delete Subject Equivalence')
          ->setRoute('curriculum_subject_equivalence_delete')
          ->setLabel('delete')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject-equivalence/{id}")
          ->setPosition(15)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($cseDelete);

        // curriculum_subject_prerequisite_index    GET        ANY      ANY    /curriculum-subject-prerequisite/
        $csPrerequisites = new PermissionList();
        $csPrerequisites->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Curriculum Subject Prerequisites')
          ->setRoute('curriculum_subject_prerequisite_index')
          ->setLabel('subject prerequisite')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject-prerequisite/")
          ->setPosition(16)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($csPrerequisites);

        // curriculum_subject_prerequisite_new      GET|POST   ANY      ANY    /curriculum-subject-prerequisite/new
        $csPrere = new PermissionList();
        $csPrere->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Add Curriculum Subject Prerequisites')
          ->setRoute('curriculum_subject_prerequisite_new')
          ->setLabel('add curriculum subject prerequisite')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject-prerequisite/new")
          ->setPosition(17)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($csPrere);

        // curriculum_subject_prerequisite_show     GET        ANY      ANY    /curriculum-subject-prerequisite/{id}
        $cspShow = new PermissionList();
        $cspShow->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Curriculum Subject Prerequisite Details')
          ->setRoute('curriculum_subject_prerequisite_show')
          ->setLabel('details')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject-prerequisite/{id}")
          ->setPosition(18)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($cspShow);

        // curriculum_subject_prerequisite_edit     GET|POST   ANY      ANY    /curriculum-subject-prerequisite/{id}/edit
        $cspEdit = new PermissionList();
        $cspEdit->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Modify Curriculum Subject Prerequisite')
          ->setRoute('curriculum_subject_prerequisite_edit')
          ->setLabel('edit')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject-prerequisite/{id}/edit")
          ->setPosition(19)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($cspEdit);

        // curriculum_subject_prerequisite_delete   DELETE     ANY      ANY    /curriculum-subject-prerequisite/{id}
        $cspDelete = new PermissionList();
        $cspDelete->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_CM))
          ->setFunctionName('Delete Curriculum Subject Prerequisite')
          ->setRoute('curriculum_subject_prerequisite_delete')
          ->setLabel('delete')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/curriculum-subject-prerequisite/{id}")
          ->setPosition(20)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($cspDelete);

        // department_index                         GET        ANY      ANY    /department/
        $deptList = new PermissionList();
        $deptList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Department List')
          ->setRoute('department_index')
          ->setLabel('list of departments')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/department/")
          ->setPosition(1)
          ->setIsActive(1)
          ->setIsSideMenu(1);
        $manager->persist($deptList);

        // department_new                           GET|POST   ANY      ANY    /department/new
        $newDepartment = new PermissionList();
        $newDepartment->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Create New Department')
          ->setRoute('department_new')
          ->setLabel('new department')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/department/new")
          ->setPosition(1)
          ->setIsActive(1)
          ->setIsSideMenu(1);
        $manager->persist($newDepartment);

        // department_show                          GET        ANY      ANY    /department/{id}
        $showDept = new PermissionList();
        $showDept->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Department Details')
          ->setRoute('department_show')
          ->setLabel('Department Details')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/department/{id}")
          ->setPosition(2)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($showDept);

        // department_edit                          GET|POST   ANY      ANY    /department/{id}/edit
        $ayList = new PermissionList();
        $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Modify Department')
          ->setRoute('department_edit')
          ->setLabel('edit')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/department/{id}/edit/")
          ->setPosition(3)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($ayList);

        //                         DELETE     ANY      ANY
        $deleteDept = new PermissionList();
        $deleteDept->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_US))
          ->setFunctionName('Delete Department')
          ->setRoute('department_delete')
          ->setLabel('delete')
          ->setPermittedRoles(["ROLE_ADMIN"])
          ->setRouteUrl("/department/{id}")
          ->setPosition(4)
          ->setIsActive(1)
          ->setIsSideMenu(0);
        $manager->persist($deleteDept);
        //
        // // employee_index                           GET        ANY      ANY    /employee/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // employee_new                             GET|POST   ANY      ANY    /employee/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // employee_show                            GET        ANY      ANY    /employee/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // employee_edit                            GET|POST   ANY      ANY    /employee/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // employee_delete                          DELETE     ANY      ANY    /employee/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // enrollment_details_index                 GET        ANY      ANY    /enrollment-details/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // enrollment_details_new                   GET|POST   ANY      ANY    /enrollment-details/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // enrollment_details_show                  GET        ANY      ANY    /enrollment-details/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // enrollment_details_edit                  GET|POST   ANY      ANY    /enrollment-details/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // enrollment_details_delete                DELETE     ANY      ANY    /enrollment-details/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // exam_passing_score_index                 GET        ANY      ANY    /exam-passing-score/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // exam_passing_score_new                   GET|POST   ANY      ANY    /exam-passing-score/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // exam_passing_score_show                  GET        ANY      ANY    /exam-passing-score/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // exam_passing_score_edit                  GET|POST   ANY      ANY    /exam-passing-score/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // exam_passing_score_delete                DELETE     ANY      ANY    /exam-passing-score/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // faculty_load_index                       GET        ANY      ANY    /faculty-load/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_FACULTY_LOADING))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // faculty_load_new                         GET|POST   ANY      ANY    /faculty-load/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_FACULTY_LOADING))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // faculty_load_show                        GET        ANY      ANY    /faculty-load/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_FACULTY_LOADING))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // faculty_load_edit                        GET|POST   ANY      ANY    /faculty-load/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_FACULTY_LOADING))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // faculty_load_delete                      DELETE     ANY      ANY    /faculty-load/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_FACULTY_LOADING))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // room_index                               GET        ANY      ANY    /room/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // room_new                                 GET|POST   ANY      ANY    /room/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // room_show                                GET        ANY      ANY    /room/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // room_edit                                GET|POST   ANY      ANY    /room/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // room_delete                              DELETE     ANY      ANY    /room/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // section_index                            GET        ANY      ANY    /section/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // section_new                              GET|POST   ANY      ANY    /section/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // section_show                             GET        ANY      ANY    /section/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // section_edit                             GET|POST   ANY      ANY    /section/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // section_delete                           DELETE     ANY      ANY    /section/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // app_login                                ANY        ANY      ANY    /login
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // semester_index                           GET        ANY      ANY    /semester/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // semester_new                             GET|POST   ANY      ANY    /semester/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // semester_show                            GET        ANY      ANY    /semester/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // semester_edit                            GET|POST   ANY      ANY    /semester/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // semester_delete                          DELETE     ANY      ANY    /semester/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_index                            GET        ANY      ANY    /student/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_new                              GET|POST   ANY      ANY    /student/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_show                             GET        ANY      ANY    /student/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_edit                             GET|POST   ANY      ANY    /student/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_delete                           DELETE     ANY      ANY    /student/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_enrolled_subject_index           GET        ANY      ANY    /student-enrolled-subjects/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_enrolled_subject_new             GET|POST   ANY      ANY    /student-enrolled-subjects/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_enrolled_subject_show            GET        ANY      ANY    /student-enrolled-subjects/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_enrolled_subject_edit            GET|POST   ANY      ANY    /student-enrolled-subjects/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_enrolled_subject_delete          DELETE     ANY      ANY    /student-enrolled-subjects/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_examinee_index                   GET        ANY      ANY    /student-examinee/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_examinee_new                     GET|POST   ANY      ANY    /student-examinee/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_examinee_show                    GET        ANY      ANY    /student-examinee/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_examinee_edit                    GET|POST   ANY      ANY    /student-examinee/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_examinee_delete                  DELETE     ANY      ANY    /student-examinee/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_grade_index                      GET        ANY      ANY    /student-grade/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_grade_new                        GET|POST   ANY      ANY    /student-grade/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_grade_show                       GET        ANY      ANY    /student-grade/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_grade_edit                       GET|POST   ANY      ANY    /student-grade/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_grade_delete                     DELETE     ANY      ANY    /student-grade/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_profiling_details_index          GET        ANY      ANY    /student-profiling-details/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_profiling_details_new            GET|POST   ANY      ANY    /student-profiling-details/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_profiling_details_show           GET        ANY      ANY    /student-profiling-details/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_profiling_details_edit           GET|POST   ANY      ANY    /student-profiling-details/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // student_profiling_details_delete         DELETE     ANY      ANY    /student-profiling-details/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // subject_index                            GET        ANY      ANY    /subject/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // subject_new                              GET|POST   ANY      ANY    /subject/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // subject_show                             GET        ANY      ANY    /subject/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // subject_edit                             GET|POST   ANY      ANY    /subject/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // subject_delete                           DELETE     ANY      ANY    /subject/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // subject_offering_index                   GET        ANY      ANY    /subject-offering/
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // subject_offering_new                     GET|POST   ANY      ANY    /subject-offering/new
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // subject_offering_show                    GET        ANY      ANY    /subject-offering/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // subject_offering_edit                    GET|POST   ANY      ANY    /subject-offering/{id}/edit
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);
        // // subject_offering_delete                  DELETE     ANY      ANY    /subject-offering/{id}
        // $ayList = new PermissionList();
        // $ayList->setModule($this->getReference(SystemModuleFixtures::SYSTEM_MODULE_AI))
        //   ->setFunctionName('AY List')
        //   ->setRoute('academic_year_index')
        //   ->setLabel('academic year list')
        //   ->setPermittedRoles(["ROLE_ADMIN"])
        //   ->setRouteUrl("/academic/year/")
        //   ->setPosition(1)
        //   ->setIsActive(1)
        //   ->setIsSideMenu(1);
        // $manager->persist($ayList);

        $manager->flush();
    }

    public function getDependencies()
    {
      return array(
        SystemModuleFixtures::class,
      );
    }
}
