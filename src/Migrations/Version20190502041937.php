<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190502041937 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, landing_page_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, is_active TINYINT(1) NOT NULL, INDEX IDX_57698A6ADF122DC5 (landing_page_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE curriculum_subject_equivallence (id INT AUTO_INCREMENT NOT NULL, curriculum_subject_id INT NOT NULL, subject_equivalence JSON NOT NULL, INDEX IDX_5052CB66F740538D (curriculum_subject_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rooms (id INT AUTO_INCREMENT NOT NULL, building_id INT DEFAULT NULL, room_code VARCHAR(30) NOT NULL, description LONGTEXT DEFAULT NULL, name VARCHAR(20) NOT NULL, INDEX IDX_7CA11A964D2A7E12 (building_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE permission_lists (id INT AUTO_INCREMENT NOT NULL, module_id INT NOT NULL, function_name VARCHAR(100) NOT NULL, route VARCHAR(255) NOT NULL, label VARCHAR(255) NOT NULL, permitted_roles JSON NOT NULL, position SMALLINT NOT NULL, is_active TINYINT(1) NOT NULL, is_side_menu TINYINT(1) NOT NULL, INDEX IDX_DEA1F2D6AFC2B591 (module_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE academic_years (id INT AUTO_INCREMENT NOT NULL, ay_start_year VARCHAR(4) NOT NULL, ay_end_year VARCHAR(4) NOT NULL, status VARCHAR(1) NOT NULL, is_accepting_examinee TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE academic_year_instances (id INT AUTO_INCREMENT NOT NULL, academic_year_id INT NOT NULL, semester_id INT NOT NULL, semester_start_date DATE NOT NULL, enrollment_start_date DATE NOT NULL, enrollment_end_date DATE NOT NULL, remarks LONGTEXT DEFAULT NULL, status VARCHAR(1) NOT NULL, INDEX IDX_78FCDA4C54F3401 (academic_year_id), INDEX IDX_78FCDA44A798B6F (semester_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faculty_loads (id INT AUTO_INCREMENT NOT NULL, employee_id INT NOT NULL, subject_offerring_id INT NOT NULL, is_grade_submitted TINYINT(1) NOT NULL, grade_save_at DATETIME NOT NULL, grade_submitted_at DATETIME NOT NULL, grade_updated_at DATETIME NOT NULL, is_grade_finalized TINYINT(1) NOT NULL, date_grade_finalized DATE NOT NULL, grade_finalized_at DATETIME NOT NULL, INDEX IDX_63A94DA88C03F15C (employee_id), INDEX IDX_63A94DA8CC6E2771 (subject_offerring_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE curriculums (id INT AUTO_INCREMENT NOT NULL, academic_year_id INT NOT NULL, course_id INT NOT NULL, curriculum_code VARCHAR(30) NOT NULL, title LONGTEXT NOT NULL, status VARCHAR(1) NOT NULL, is_finalized TINYINT(1) NOT NULL, INDEX IDX_1918BEA6C54F3401 (academic_year_id), INDEX IDX_1918BEA6591CC992 (course_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enrollment_details (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, course_id INT NOT NULL, section_id INT NOT NULL, academic_year_id INT NOT NULL, semester_id INT NOT NULL, enrolling_officer_id INT NOT NULL, student_picture LONGTEXT DEFAULT NULL, date_enrolled DATETIME NOT NULL, remarks LONGTEXT NOT NULL, is_balik_aral TINYINT(1) NOT NULL, is_transferee TINYINT(1) NOT NULL, is_cross_enrollee TINYINT(1) NOT NULL, is_fully_paid TINYINT(1) NOT NULL, is_medically_cleared TINYINT(1) NOT NULL, is_finalalized TINYINT(1) NOT NULL, INDEX IDX_BCA960DFCB944F1A (student_id), INDEX IDX_BCA960DF591CC992 (course_id), INDEX IDX_BCA960DFD823E37A (section_id), INDEX IDX_BCA960DFC54F3401 (academic_year_id), INDEX IDX_BCA960DF4A798B6F (semester_id), INDEX IDX_BCA960DFF570E2BA (enrolling_officer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subjects (id INT AUTO_INCREMENT NOT NULL, department_id INT NOT NULL, course_id INT DEFAULT NULL, subject_code VARCHAR(30) NOT NULL, subject_title LONGTEXT NOT NULL, description LONGTEXT NOT NULL, units SMALLINT NOT NULL, lecture_hour DOUBLE PRECISION NOT NULL, lab_hour DOUBLE PRECISION DEFAULT NULL, is_for_highschool TINYINT(1) NOT NULL, INDEX IDX_AB259917AE80F5DF (department_id), INDEX IDX_AB259917591CC992 (course_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE colleges (id INT AUTO_INCREMENT NOT NULL, college_code VARCHAR(20) NOT NULL, description LONGTEXT DEFAULT NULL, other_notes LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE is_side_menu (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_grades (id INT AUTO_INCREMENT NOT NULL, student_subject_enrolled_id INT NOT NULL, semester_id INT NOT NULL, employee_id INT NOT NULL, INDEX IDX_B4D5B99047C28D26 (student_subject_enrolled_id), INDEX IDX_B4D5B9904A798B6F (semester_id), INDEX IDX_B4D5B9908C03F15C (employee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE semesters (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(20) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employees (id INT AUTO_INCREMENT NOT NULL, department_id INT NOT NULL, user_id INT NOT NULL, employee_no VARCHAR(30) NOT NULL, employee_image LONGTEXT DEFAULT NULL, title_prefix VARCHAR(255) DEFAULT NULL, last_name VARCHAR(100) NOT NULL, first_name VARCHAR(100) NOT NULL, middle_name VARCHAR(100) DEFAULT NULL, extension_name VARCHAR(100) DEFAULT NULL, title_suffix VARCHAR(20) DEFAULT NULL, address LONGTEXT NOT NULL, email VARCHAR(100) NOT NULL, contact_no VARCHAR(20) NOT NULL, gender VARCHAR(1) NOT NULL, birth_date DATE NOT NULL, birth_place LONGTEXT NOT NULL, civil_status VARCHAR(30) NOT NULL, maiden_name VARCHAR(100) DEFAULT NULL, height SMALLINT NOT NULL, weight SMALLINT DEFAULT NULL, religion LONGTEXT DEFAULT NULL, date_employed DATE NOT NULL, status VARCHAR(1) NOT NULL, is_faculty TINYINT(1) NOT NULL, INDEX IDX_BA82C300AE80F5DF (department_id), UNIQUE INDEX UNIQ_BA82C300A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject_offerings (id INT AUTO_INCREMENT NOT NULL, employee_id INT NOT NULL, academic_year_instance_id INT NOT NULL, course_id INT NOT NULL, section_id INT NOT NULL, curriculum_subject_id INT NOT NULL, room_id INT NOT NULL, grade_submitted_by_id INT NOT NULL, grade_finalized_by_id INT NOT NULL, labday VARCHAR(255) NOT NULL, labday_time VARCHAR(255) NOT NULL, lecture_day VARCHAR(255) NOT NULL, lecture_day_time VARCHAR(255) NOT NULL, allowed_no_student SMALLINT NOT NULL, status VARCHAR(1) NOT NULL, INDEX IDX_E49CB0118C03F15C (employee_id), INDEX IDX_E49CB011A1D018BB (academic_year_instance_id), INDEX IDX_E49CB011591CC992 (course_id), INDEX IDX_E49CB011D823E37A (section_id), INDEX IDX_E49CB011F740538D (curriculum_subject_id), INDEX IDX_E49CB01154177093 (room_id), INDEX IDX_E49CB0117117CC3A (grade_submitted_by_id), INDEX IDX_E49CB011BEC0C94D (grade_finalized_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departments (id INT AUTO_INCREMENT NOT NULL, college_id INT DEFAULT NULL, department_head_id INT NOT NULL, department_code VARCHAR(30) NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_16AEB8D4770124B2 (college_id), INDEX IDX_16AEB8D449B3897D (department_head_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE curriculum_subjects (id INT AUTO_INCREMENT NOT NULL, curriculum_id INT NOT NULL, semester_id INT NOT NULL, subject_id INT NOT NULL, year_level VARCHAR(255) NOT NULL, INDEX IDX_51FD47535AEA4428 (curriculum_id), INDEX IDX_51FD47534A798B6F (semester_id), INDEX IDX_51FD475323EDC87 (subject_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE system_modules (id INT AUTO_INCREMENT NOT NULL, module_name VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, alowed_roles JSON NOT NULL, position SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE courses (id INT AUTO_INCREMENT NOT NULL, college_id INT NOT NULL, course_code VARCHAR(20) NOT NULL, course_title VARCHAR(255) NOT NULL, degree VARCHAR(255) NOT NULL, major LONGTEXT DEFAULT NULL, INDEX IDX_A9A55A4C770124B2 (college_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE students (id INT AUTO_INCREMENT NOT NULL, academic_year_instance_id INT NOT NULL, student_examinee_id INT NOT NULL, user_id INT NOT NULL, profiller_id INT NOT NULL, student_no VARCHAR(20) NOT NULL, last_name VARCHAR(100) NOT NULL, first_name VARCHAR(100) NOT NULL, middle_name VARCHAR(100) DEFAULT NULL, extension_name VARCHAR(100) DEFAULT NULL, address LONGTEXT NOT NULL, barangay LONGTEXT NOT NULL, contact_no VARCHAR(20) NOT NULL, email VARCHAR(100) NOT NULL, gender VARCHAR(1) NOT NULL, birth_date DATE NOT NULL, birth_place LONGTEXT NOT NULL, civil_status VARCHAR(255) NOT NULL, religion LONGTEXT DEFAULT NULL, height SMALLINT NOT NULL, weight SMALLINT NOT NULL, year_profiled VARCHAR(4) NOT NULL, father_name VARCHAR(100) NOT NULL, father_occupation LONGTEXT NOT NULL, mother_name VARCHAR(100) NOT NULL, mother_occupation LONGTEXT NOT NULL, guadian VARCHAR(255) NOT NULL, relation_guardian VARCHAR(255) NOT NULL, guardian_contact_no VARCHAR(20) NOT NULL, maiden_name VARCHAR(100) NOT NULL, voter_id VARCHAR(255) NOT NULL, person_to_notify VARCHAR(255) NOT NULL, status VARCHAR(1) NOT NULL, INDEX IDX_A4698DB2A1D018BB (academic_year_instance_id), UNIQUE INDEX UNIQ_A4698DB29076E746 (student_examinee_id), UNIQUE INDEX UNIQ_A4698DB2A76ED395 (user_id), INDEX IDX_A4698DB2324D552 (profiller_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, last_name VARCHAR(100) NOT NULL, first_name VARCHAR(100) NOT NULL, birth_date DATE NOT NULL, is_active TINYINT(1) DEFAULT \'1\' NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE added_loads (id INT AUTO_INCREMENT NOT NULL, subject_offering_id INT NOT NULL, professor_id INT NOT NULL, academic_year_id INT NOT NULL, semester_id INT NOT NULL, INDEX IDX_877BA29616D6ACD4 (subject_offering_id), INDEX IDX_877BA2967D2D84D5 (professor_id), INDEX IDX_877BA296C54F3401 (academic_year_id), INDEX IDX_877BA2964A798B6F (semester_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE buildings (id INT AUTO_INCREMENT NOT NULL, building_code VARCHAR(255) NOT NULL, building_name LONGTEXT NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE curriculum_subject_prerequisites (id INT AUTO_INCREMENT NOT NULL, curriculum_subject_id INT NOT NULL, subject_prerequisite JSON NOT NULL, remarks LONGTEXT DEFAULT NULL, INDEX IDX_30E2C81FF740538D (curriculum_subject_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_profiling_details (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, course_id INT NOT NULL, curriculum_id INT NOT NULL, academic_year_instance_id INT NOT NULL, profiler_id INT NOT NULL, date_profiled DATE NOT NULL, remarks LONGTEXT NOT NULL, status VARCHAR(20) NOT NULL, INDEX IDX_AC4E8B75CB944F1A (student_id), INDEX IDX_AC4E8B75591CC992 (course_id), INDEX IDX_AC4E8B755AEA4428 (curriculum_id), INDEX IDX_AC4E8B75A1D018BB (academic_year_instance_id), INDEX IDX_AC4E8B759ABB1BEC (profiler_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exam_passing_scores (id INT AUTO_INCREMENT NOT NULL, academic_year_id INT NOT NULL, score INT NOT NULL, UNIQUE INDEX UNIQ_42029474C54F3401 (academic_year_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_enrolled_subjects (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, subject_offering_id INT NOT NULL, enrollment_detail_id INT NOT NULL, academic_year_instance_id INT NOT NULL, date_enrolled DATE NOT NULL, is_added_subject TINYINT(1) NOT NULL, INDEX IDX_203BA1E6CB944F1A (student_id), INDEX IDX_203BA1E616D6ACD4 (subject_offering_id), INDEX IDX_203BA1E6C57CDCF5 (enrollment_detail_id), INDEX IDX_203BA1E6A1D018BB (academic_year_instance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_examinees (id INT AUTO_INCREMENT NOT NULL, first_course_id INT NOT NULL, second_course_id INT DEFAULT NULL, academic_year_id INT NOT NULL, examinee_no VARCHAR(30) NOT NULL, examination_date DATE NOT NULL, venue LONGTEXT NOT NULL, examination_time TIME NOT NULL, last_name VARCHAR(100) NOT NULL, first_name VARCHAR(100) NOT NULL, middle_name VARCHAR(100) NOT NULL, extention_name VARCHAR(100) DEFAULT NULL, gender VARCHAR(1) NOT NULL, contact_no VARCHAR(20) NOT NULL, birth_date DATE NOT NULL, birth_place LONGTEXT NOT NULL, address LONGTEXT NOT NULL, last_school_attended LONGTEXT NOT NULL, last_school_address LONGTEXT NOT NULL, examination_score INT NOT NULL, profiling_status VARCHAR(2) NOT NULL, INDEX IDX_A1CCE396A51159DC (first_course_id), INDEX IDX_A1CCE39664F7481A (second_course_id), INDEX IDX_A1CCE396C54F3401 (academic_year_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sections (id INT AUTO_INCREMENT NOT NULL, curriculum_id INT NOT NULL, course_id INT NOT NULL, academic_year_instance_id INT NOT NULL, section_code VARCHAR(30) NOT NULL, section_name VARCHAR(30) NOT NULL, shift VARCHAR(30) NOT NULL, max_no_student SMALLINT NOT NULL, status VARCHAR(1) NOT NULL, INDEX IDX_2B9643985AEA4428 (curriculum_id), INDEX IDX_2B964398591CC992 (course_id), INDEX IDX_2B964398A1D018BB (academic_year_instance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE role ADD CONSTRAINT FK_57698A6ADF122DC5 FOREIGN KEY (landing_page_id) REFERENCES permission_lists (id)');
        $this->addSql('ALTER TABLE curriculum_subject_equivallence ADD CONSTRAINT FK_5052CB66F740538D FOREIGN KEY (curriculum_subject_id) REFERENCES curriculum_subjects (id)');
        $this->addSql('ALTER TABLE rooms ADD CONSTRAINT FK_7CA11A964D2A7E12 FOREIGN KEY (building_id) REFERENCES buildings (id)');
        $this->addSql('ALTER TABLE permission_lists ADD CONSTRAINT FK_DEA1F2D6AFC2B591 FOREIGN KEY (module_id) REFERENCES system_modules (id)');
        $this->addSql('ALTER TABLE academic_year_instances ADD CONSTRAINT FK_78FCDA4C54F3401 FOREIGN KEY (academic_year_id) REFERENCES academic_years (id)');
        $this->addSql('ALTER TABLE academic_year_instances ADD CONSTRAINT FK_78FCDA44A798B6F FOREIGN KEY (semester_id) REFERENCES semesters (id)');
        $this->addSql('ALTER TABLE faculty_loads ADD CONSTRAINT FK_63A94DA88C03F15C FOREIGN KEY (employee_id) REFERENCES employees (id)');
        $this->addSql('ALTER TABLE faculty_loads ADD CONSTRAINT FK_63A94DA8CC6E2771 FOREIGN KEY (subject_offerring_id) REFERENCES subject_offerings (id)');
        $this->addSql('ALTER TABLE curriculums ADD CONSTRAINT FK_1918BEA6C54F3401 FOREIGN KEY (academic_year_id) REFERENCES academic_years (id)');
        $this->addSql('ALTER TABLE curriculums ADD CONSTRAINT FK_1918BEA6591CC992 FOREIGN KEY (course_id) REFERENCES courses (id)');
        $this->addSql('ALTER TABLE enrollment_details ADD CONSTRAINT FK_BCA960DFCB944F1A FOREIGN KEY (student_id) REFERENCES students (id)');
        $this->addSql('ALTER TABLE enrollment_details ADD CONSTRAINT FK_BCA960DF591CC992 FOREIGN KEY (course_id) REFERENCES courses (id)');
        $this->addSql('ALTER TABLE enrollment_details ADD CONSTRAINT FK_BCA960DFD823E37A FOREIGN KEY (section_id) REFERENCES sections (id)');
        $this->addSql('ALTER TABLE enrollment_details ADD CONSTRAINT FK_BCA960DFC54F3401 FOREIGN KEY (academic_year_id) REFERENCES academic_years (id)');
        $this->addSql('ALTER TABLE enrollment_details ADD CONSTRAINT FK_BCA960DF4A798B6F FOREIGN KEY (semester_id) REFERENCES semesters (id)');
        $this->addSql('ALTER TABLE enrollment_details ADD CONSTRAINT FK_BCA960DFF570E2BA FOREIGN KEY (enrolling_officer_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE subjects ADD CONSTRAINT FK_AB259917AE80F5DF FOREIGN KEY (department_id) REFERENCES departments (id)');
        $this->addSql('ALTER TABLE subjects ADD CONSTRAINT FK_AB259917591CC992 FOREIGN KEY (course_id) REFERENCES courses (id)');
        $this->addSql('ALTER TABLE student_grades ADD CONSTRAINT FK_B4D5B99047C28D26 FOREIGN KEY (student_subject_enrolled_id) REFERENCES student_enrolled_subjects (id)');
        $this->addSql('ALTER TABLE student_grades ADD CONSTRAINT FK_B4D5B9904A798B6F FOREIGN KEY (semester_id) REFERENCES semesters (id)');
        $this->addSql('ALTER TABLE student_grades ADD CONSTRAINT FK_B4D5B9908C03F15C FOREIGN KEY (employee_id) REFERENCES employees (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C300AE80F5DF FOREIGN KEY (department_id) REFERENCES departments (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C300A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE subject_offerings ADD CONSTRAINT FK_E49CB0118C03F15C FOREIGN KEY (employee_id) REFERENCES employees (id)');
        $this->addSql('ALTER TABLE subject_offerings ADD CONSTRAINT FK_E49CB011A1D018BB FOREIGN KEY (academic_year_instance_id) REFERENCES academic_year_instances (id)');
        $this->addSql('ALTER TABLE subject_offerings ADD CONSTRAINT FK_E49CB011591CC992 FOREIGN KEY (course_id) REFERENCES courses (id)');
        $this->addSql('ALTER TABLE subject_offerings ADD CONSTRAINT FK_E49CB011D823E37A FOREIGN KEY (section_id) REFERENCES sections (id)');
        $this->addSql('ALTER TABLE subject_offerings ADD CONSTRAINT FK_E49CB011F740538D FOREIGN KEY (curriculum_subject_id) REFERENCES curriculum_subjects (id)');
        $this->addSql('ALTER TABLE subject_offerings ADD CONSTRAINT FK_E49CB01154177093 FOREIGN KEY (room_id) REFERENCES rooms (id)');
        $this->addSql('ALTER TABLE subject_offerings ADD CONSTRAINT FK_E49CB0117117CC3A FOREIGN KEY (grade_submitted_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE subject_offerings ADD CONSTRAINT FK_E49CB011BEC0C94D FOREIGN KEY (grade_finalized_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE departments ADD CONSTRAINT FK_16AEB8D4770124B2 FOREIGN KEY (college_id) REFERENCES colleges (id)');
        $this->addSql('ALTER TABLE departments ADD CONSTRAINT FK_16AEB8D449B3897D FOREIGN KEY (department_head_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE curriculum_subjects ADD CONSTRAINT FK_51FD47535AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculums (id)');
        $this->addSql('ALTER TABLE curriculum_subjects ADD CONSTRAINT FK_51FD47534A798B6F FOREIGN KEY (semester_id) REFERENCES semesters (id)');
        $this->addSql('ALTER TABLE curriculum_subjects ADD CONSTRAINT FK_51FD475323EDC87 FOREIGN KEY (subject_id) REFERENCES subjects (id)');
        $this->addSql('ALTER TABLE courses ADD CONSTRAINT FK_A9A55A4C770124B2 FOREIGN KEY (college_id) REFERENCES colleges (id)');
        $this->addSql('ALTER TABLE students ADD CONSTRAINT FK_A4698DB2A1D018BB FOREIGN KEY (academic_year_instance_id) REFERENCES academic_year_instances (id)');
        $this->addSql('ALTER TABLE students ADD CONSTRAINT FK_A4698DB29076E746 FOREIGN KEY (student_examinee_id) REFERENCES student_examinees (id)');
        $this->addSql('ALTER TABLE students ADD CONSTRAINT FK_A4698DB2A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE students ADD CONSTRAINT FK_A4698DB2324D552 FOREIGN KEY (profiller_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE added_loads ADD CONSTRAINT FK_877BA29616D6ACD4 FOREIGN KEY (subject_offering_id) REFERENCES subject_offerings (id)');
        $this->addSql('ALTER TABLE added_loads ADD CONSTRAINT FK_877BA2967D2D84D5 FOREIGN KEY (professor_id) REFERENCES employees (id)');
        $this->addSql('ALTER TABLE added_loads ADD CONSTRAINT FK_877BA296C54F3401 FOREIGN KEY (academic_year_id) REFERENCES academic_years (id)');
        $this->addSql('ALTER TABLE added_loads ADD CONSTRAINT FK_877BA2964A798B6F FOREIGN KEY (semester_id) REFERENCES semesters (id)');
        $this->addSql('ALTER TABLE curriculum_subject_prerequisites ADD CONSTRAINT FK_30E2C81FF740538D FOREIGN KEY (curriculum_subject_id) REFERENCES curriculum_subjects (id)');
        $this->addSql('ALTER TABLE student_profiling_details ADD CONSTRAINT FK_AC4E8B75CB944F1A FOREIGN KEY (student_id) REFERENCES students (id)');
        $this->addSql('ALTER TABLE student_profiling_details ADD CONSTRAINT FK_AC4E8B75591CC992 FOREIGN KEY (course_id) REFERENCES courses (id)');
        $this->addSql('ALTER TABLE student_profiling_details ADD CONSTRAINT FK_AC4E8B755AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculums (id)');
        $this->addSql('ALTER TABLE student_profiling_details ADD CONSTRAINT FK_AC4E8B75A1D018BB FOREIGN KEY (academic_year_instance_id) REFERENCES academic_year_instances (id)');
        $this->addSql('ALTER TABLE student_profiling_details ADD CONSTRAINT FK_AC4E8B759ABB1BEC FOREIGN KEY (profiler_id) REFERENCES employees (id)');
        $this->addSql('ALTER TABLE exam_passing_scores ADD CONSTRAINT FK_42029474C54F3401 FOREIGN KEY (academic_year_id) REFERENCES academic_years (id)');
        $this->addSql('ALTER TABLE student_enrolled_subjects ADD CONSTRAINT FK_203BA1E6CB944F1A FOREIGN KEY (student_id) REFERENCES students (id)');
        $this->addSql('ALTER TABLE student_enrolled_subjects ADD CONSTRAINT FK_203BA1E616D6ACD4 FOREIGN KEY (subject_offering_id) REFERENCES subject_offerings (id)');
        $this->addSql('ALTER TABLE student_enrolled_subjects ADD CONSTRAINT FK_203BA1E6C57CDCF5 FOREIGN KEY (enrollment_detail_id) REFERENCES enrollment_details (id)');
        $this->addSql('ALTER TABLE student_enrolled_subjects ADD CONSTRAINT FK_203BA1E6A1D018BB FOREIGN KEY (academic_year_instance_id) REFERENCES academic_year_instances (id)');
        $this->addSql('ALTER TABLE student_examinees ADD CONSTRAINT FK_A1CCE396A51159DC FOREIGN KEY (first_course_id) REFERENCES courses (id)');
        $this->addSql('ALTER TABLE student_examinees ADD CONSTRAINT FK_A1CCE39664F7481A FOREIGN KEY (second_course_id) REFERENCES courses (id)');
        $this->addSql('ALTER TABLE student_examinees ADD CONSTRAINT FK_A1CCE396C54F3401 FOREIGN KEY (academic_year_id) REFERENCES academic_years (id)');
        $this->addSql('ALTER TABLE sections ADD CONSTRAINT FK_2B9643985AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculums (id)');
        $this->addSql('ALTER TABLE sections ADD CONSTRAINT FK_2B964398591CC992 FOREIGN KEY (course_id) REFERENCES courses (id)');
        $this->addSql('ALTER TABLE sections ADD CONSTRAINT FK_2B964398A1D018BB FOREIGN KEY (academic_year_instance_id) REFERENCES academic_year_instances (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE subject_offerings DROP FOREIGN KEY FK_E49CB01154177093');
        $this->addSql('ALTER TABLE role DROP FOREIGN KEY FK_57698A6ADF122DC5');
        $this->addSql('ALTER TABLE academic_year_instances DROP FOREIGN KEY FK_78FCDA4C54F3401');
        $this->addSql('ALTER TABLE curriculums DROP FOREIGN KEY FK_1918BEA6C54F3401');
        $this->addSql('ALTER TABLE enrollment_details DROP FOREIGN KEY FK_BCA960DFC54F3401');
        $this->addSql('ALTER TABLE added_loads DROP FOREIGN KEY FK_877BA296C54F3401');
        $this->addSql('ALTER TABLE exam_passing_scores DROP FOREIGN KEY FK_42029474C54F3401');
        $this->addSql('ALTER TABLE student_examinees DROP FOREIGN KEY FK_A1CCE396C54F3401');
        $this->addSql('ALTER TABLE subject_offerings DROP FOREIGN KEY FK_E49CB011A1D018BB');
        $this->addSql('ALTER TABLE students DROP FOREIGN KEY FK_A4698DB2A1D018BB');
        $this->addSql('ALTER TABLE student_profiling_details DROP FOREIGN KEY FK_AC4E8B75A1D018BB');
        $this->addSql('ALTER TABLE student_enrolled_subjects DROP FOREIGN KEY FK_203BA1E6A1D018BB');
        $this->addSql('ALTER TABLE sections DROP FOREIGN KEY FK_2B964398A1D018BB');
        $this->addSql('ALTER TABLE curriculum_subjects DROP FOREIGN KEY FK_51FD47535AEA4428');
        $this->addSql('ALTER TABLE student_profiling_details DROP FOREIGN KEY FK_AC4E8B755AEA4428');
        $this->addSql('ALTER TABLE sections DROP FOREIGN KEY FK_2B9643985AEA4428');
        $this->addSql('ALTER TABLE student_enrolled_subjects DROP FOREIGN KEY FK_203BA1E6C57CDCF5');
        $this->addSql('ALTER TABLE curriculum_subjects DROP FOREIGN KEY FK_51FD475323EDC87');
        $this->addSql('ALTER TABLE departments DROP FOREIGN KEY FK_16AEB8D4770124B2');
        $this->addSql('ALTER TABLE courses DROP FOREIGN KEY FK_A9A55A4C770124B2');
        $this->addSql('ALTER TABLE academic_year_instances DROP FOREIGN KEY FK_78FCDA44A798B6F');
        $this->addSql('ALTER TABLE enrollment_details DROP FOREIGN KEY FK_BCA960DF4A798B6F');
        $this->addSql('ALTER TABLE student_grades DROP FOREIGN KEY FK_B4D5B9904A798B6F');
        $this->addSql('ALTER TABLE curriculum_subjects DROP FOREIGN KEY FK_51FD47534A798B6F');
        $this->addSql('ALTER TABLE added_loads DROP FOREIGN KEY FK_877BA2964A798B6F');
        $this->addSql('ALTER TABLE faculty_loads DROP FOREIGN KEY FK_63A94DA88C03F15C');
        $this->addSql('ALTER TABLE student_grades DROP FOREIGN KEY FK_B4D5B9908C03F15C');
        $this->addSql('ALTER TABLE subject_offerings DROP FOREIGN KEY FK_E49CB0118C03F15C');
        $this->addSql('ALTER TABLE added_loads DROP FOREIGN KEY FK_877BA2967D2D84D5');
        $this->addSql('ALTER TABLE student_profiling_details DROP FOREIGN KEY FK_AC4E8B759ABB1BEC');
        $this->addSql('ALTER TABLE faculty_loads DROP FOREIGN KEY FK_63A94DA8CC6E2771');
        $this->addSql('ALTER TABLE added_loads DROP FOREIGN KEY FK_877BA29616D6ACD4');
        $this->addSql('ALTER TABLE student_enrolled_subjects DROP FOREIGN KEY FK_203BA1E616D6ACD4');
        $this->addSql('ALTER TABLE subjects DROP FOREIGN KEY FK_AB259917AE80F5DF');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C300AE80F5DF');
        $this->addSql('ALTER TABLE curriculum_subject_equivallence DROP FOREIGN KEY FK_5052CB66F740538D');
        $this->addSql('ALTER TABLE subject_offerings DROP FOREIGN KEY FK_E49CB011F740538D');
        $this->addSql('ALTER TABLE curriculum_subject_prerequisites DROP FOREIGN KEY FK_30E2C81FF740538D');
        $this->addSql('ALTER TABLE permission_lists DROP FOREIGN KEY FK_DEA1F2D6AFC2B591');
        $this->addSql('ALTER TABLE curriculums DROP FOREIGN KEY FK_1918BEA6591CC992');
        $this->addSql('ALTER TABLE enrollment_details DROP FOREIGN KEY FK_BCA960DF591CC992');
        $this->addSql('ALTER TABLE subjects DROP FOREIGN KEY FK_AB259917591CC992');
        $this->addSql('ALTER TABLE subject_offerings DROP FOREIGN KEY FK_E49CB011591CC992');
        $this->addSql('ALTER TABLE student_profiling_details DROP FOREIGN KEY FK_AC4E8B75591CC992');
        $this->addSql('ALTER TABLE student_examinees DROP FOREIGN KEY FK_A1CCE396A51159DC');
        $this->addSql('ALTER TABLE student_examinees DROP FOREIGN KEY FK_A1CCE39664F7481A');
        $this->addSql('ALTER TABLE sections DROP FOREIGN KEY FK_2B964398591CC992');
        $this->addSql('ALTER TABLE enrollment_details DROP FOREIGN KEY FK_BCA960DFCB944F1A');
        $this->addSql('ALTER TABLE student_profiling_details DROP FOREIGN KEY FK_AC4E8B75CB944F1A');
        $this->addSql('ALTER TABLE student_enrolled_subjects DROP FOREIGN KEY FK_203BA1E6CB944F1A');
        $this->addSql('ALTER TABLE enrollment_details DROP FOREIGN KEY FK_BCA960DFF570E2BA');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C300A76ED395');
        $this->addSql('ALTER TABLE subject_offerings DROP FOREIGN KEY FK_E49CB0117117CC3A');
        $this->addSql('ALTER TABLE subject_offerings DROP FOREIGN KEY FK_E49CB011BEC0C94D');
        $this->addSql('ALTER TABLE departments DROP FOREIGN KEY FK_16AEB8D449B3897D');
        $this->addSql('ALTER TABLE students DROP FOREIGN KEY FK_A4698DB2A76ED395');
        $this->addSql('ALTER TABLE students DROP FOREIGN KEY FK_A4698DB2324D552');
        $this->addSql('ALTER TABLE rooms DROP FOREIGN KEY FK_7CA11A964D2A7E12');
        $this->addSql('ALTER TABLE student_grades DROP FOREIGN KEY FK_B4D5B99047C28D26');
        $this->addSql('ALTER TABLE students DROP FOREIGN KEY FK_A4698DB29076E746');
        $this->addSql('ALTER TABLE enrollment_details DROP FOREIGN KEY FK_BCA960DFD823E37A');
        $this->addSql('ALTER TABLE subject_offerings DROP FOREIGN KEY FK_E49CB011D823E37A');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE curriculum_subject_equivallence');
        $this->addSql('DROP TABLE rooms');
        $this->addSql('DROP TABLE permission_lists');
        $this->addSql('DROP TABLE academic_years');
        $this->addSql('DROP TABLE academic_year_instances');
        $this->addSql('DROP TABLE faculty_loads');
        $this->addSql('DROP TABLE curriculums');
        $this->addSql('DROP TABLE enrollment_details');
        $this->addSql('DROP TABLE subjects');
        $this->addSql('DROP TABLE colleges');
        $this->addSql('DROP TABLE is_side_menu');
        $this->addSql('DROP TABLE student_grades');
        $this->addSql('DROP TABLE semesters');
        $this->addSql('DROP TABLE employees');
        $this->addSql('DROP TABLE subject_offerings');
        $this->addSql('DROP TABLE departments');
        $this->addSql('DROP TABLE curriculum_subjects');
        $this->addSql('DROP TABLE system_modules');
        $this->addSql('DROP TABLE courses');
        $this->addSql('DROP TABLE students');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE added_loads');
        $this->addSql('DROP TABLE buildings');
        $this->addSql('DROP TABLE curriculum_subject_prerequisites');
        $this->addSql('DROP TABLE student_profiling_details');
        $this->addSql('DROP TABLE exam_passing_scores');
        $this->addSql('DROP TABLE student_enrolled_subjects');
        $this->addSql('DROP TABLE student_examinees');
        $this->addSql('DROP TABLE sections');
    }
}
