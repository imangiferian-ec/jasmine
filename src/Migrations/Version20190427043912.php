<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190427043912 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE curriculum_subject_equivalence (id INT AUTO_INCREMENT NOT NULL, curriculum_subject_id INT NOT NULL, subject_equivalence JSON NOT NULL, INDEX IDX_75405120F740538D (curriculum_subject_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE room (id INT AUTO_INCREMENT NOT NULL, building_id INT DEFAULT NULL, room_code VARCHAR(30) NOT NULL, description LONGTEXT DEFAULT NULL, name VARCHAR(20) NOT NULL, INDEX IDX_729F519B4D2A7E12 (building_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE academic_year_instance (id INT AUTO_INCREMENT NOT NULL, academic_year_id INT NOT NULL, semester_id INT NOT NULL, semester_start_date DATE NOT NULL, enrollment_start_date DATE NOT NULL, enrollment_end_date DATE NOT NULL, remarks LONGTEXT DEFAULT NULL, status VARCHAR(1) NOT NULL, INDEX IDX_ED63CD51C54F3401 (academic_year_id), INDEX IDX_ED63CD514A798B6F (semester_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faculty_load (id INT AUTO_INCREMENT NOT NULL, employee_id INT NOT NULL, subject_offerring_id INT NOT NULL, is_grade_submitted TINYINT(1) NOT NULL, grade_save_at DATETIME NOT NULL, grade_submitted_at DATETIME NOT NULL, grade_updated_at DATETIME NOT NULL, is_grade_finalized TINYINT(1) NOT NULL, date_grade_finalized DATE NOT NULL, grade_finalized_at DATETIME NOT NULL, INDEX IDX_A04B01488C03F15C (employee_id), INDEX IDX_A04B0148CC6E2771 (subject_offerring_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE curriculum (id INT AUTO_INCREMENT NOT NULL, academic_year_id INT NOT NULL, course_id INT NOT NULL, curriculum_code VARCHAR(30) NOT NULL, title LONGTEXT NOT NULL, status VARCHAR(1) NOT NULL, is_finalized TINYINT(1) NOT NULL, INDEX IDX_7BE2A7C3C54F3401 (academic_year_id), INDEX IDX_7BE2A7C3591CC992 (course_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enrollment_details (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, course_id INT NOT NULL, section_id INT NOT NULL, academic_year_id INT NOT NULL, semester_id INT NOT NULL, student_picture LONGTEXT DEFAULT NULL, date_enrolled DATETIME NOT NULL, remarks LONGTEXT NOT NULL, is_balik_aral TINYINT(1) NOT NULL, is_transferee TINYINT(1) NOT NULL, is_cross_enrollee TINYINT(1) NOT NULL, is_fully_paid TINYINT(1) NOT NULL, is_medically_cleared TINYINT(1) NOT NULL, is_finalalized TINYINT(1) NOT NULL, INDEX IDX_BCA960DFCB944F1A (student_id), INDEX IDX_BCA960DF591CC992 (course_id), INDEX IDX_BCA960DFD823E37A (section_id), INDEX IDX_BCA960DFC54F3401 (academic_year_id), INDEX IDX_BCA960DF4A798B6F (semester_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject (id INT AUTO_INCREMENT NOT NULL, department_id INT NOT NULL, course_id INT DEFAULT NULL, subject_code VARCHAR(30) NOT NULL, subject_title LONGTEXT NOT NULL, description LONGTEXT NOT NULL, units SMALLINT NOT NULL, lecture_hour DOUBLE PRECISION NOT NULL, lab_hour DOUBLE PRECISION DEFAULT NULL, is_for_highschool TINYINT(1) NOT NULL, INDEX IDX_FBCE3E7AAE80F5DF (department_id), INDEX IDX_FBCE3E7A591CC992 (course_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE college (id INT AUTO_INCREMENT NOT NULL, college_code VARCHAR(20) NOT NULL, description LONGTEXT DEFAULT NULL, other_notes LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_grade (id INT AUTO_INCREMENT NOT NULL, student_subject_enrolled_id INT NOT NULL, semester_id INT NOT NULL, employee_id INT NOT NULL, INDEX IDX_D16DD7A947C28D26 (student_subject_enrolled_id), INDEX IDX_D16DD7A94A798B6F (semester_id), INDEX IDX_D16DD7A98C03F15C (employee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE semester (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(20) NOT NULL, description LONGTEXT DEFAULT NULL, is_for_highschool TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee (id INT AUTO_INCREMENT NOT NULL, department_id INT NOT NULL, employee_no VARCHAR(30) NOT NULL, employee_image LONGTEXT DEFAULT NULL, title_prefix VARCHAR(255) DEFAULT NULL, last_name VARCHAR(100) NOT NULL, first_name VARCHAR(100) NOT NULL, middle_name VARCHAR(100) DEFAULT NULL, extension_name VARCHAR(100) DEFAULT NULL, title_suffix VARCHAR(20) DEFAULT NULL, address LONGTEXT NOT NULL, email VARCHAR(100) NOT NULL, contact_no VARCHAR(20) NOT NULL, gender VARCHAR(1) NOT NULL, birth_date DATE NOT NULL, birth_place LONGTEXT NOT NULL, civil_status VARCHAR(30) NOT NULL, maiden_name VARCHAR(100) DEFAULT NULL, height SMALLINT NOT NULL, weight SMALLINT DEFAULT NULL, religion LONGTEXT DEFAULT NULL, date_employed DATE NOT NULL, status VARCHAR(1) NOT NULL, is_faculty TINYINT(1) NOT NULL, INDEX IDX_5D9F75A1AE80F5DF (department_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject_offering (id INT AUTO_INCREMENT NOT NULL, employee_id INT NOT NULL, academic_year_instance_id INT NOT NULL, course_id INT NOT NULL, section_id INT NOT NULL, curriculum_subject_id INT NOT NULL, room_id INT NOT NULL, labday VARCHAR(255) NOT NULL, labday_time VARCHAR(255) NOT NULL, lecture_day VARCHAR(255) NOT NULL, lecture_day_time VARCHAR(255) NOT NULL, allowed_no_student SMALLINT NOT NULL, status VARCHAR(1) NOT NULL, INDEX IDX_9D156AD98C03F15C (employee_id), INDEX IDX_9D156AD9A1D018BB (academic_year_instance_id), INDEX IDX_9D156AD9591CC992 (course_id), INDEX IDX_9D156AD9D823E37A (section_id), INDEX IDX_9D156AD9F740538D (curriculum_subject_id), INDEX IDX_9D156AD954177093 (room_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE department (id INT AUTO_INCREMENT NOT NULL, college_id INT DEFAULT NULL, department_code VARCHAR(30) NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_CD1DE18A770124B2 (college_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE curriculum_subject (id INT AUTO_INCREMENT NOT NULL, curriculum_id INT NOT NULL, semester_id INT NOT NULL, subject_id INT NOT NULL, year_level VARCHAR(255) NOT NULL, INDEX IDX_2C2D19645AEA4428 (curriculum_id), INDEX IDX_2C2D19644A798B6F (semester_id), INDEX IDX_2C2D196423EDC87 (subject_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE course (id INT AUTO_INCREMENT NOT NULL, college_id INT NOT NULL, course_code VARCHAR(20) NOT NULL, course_title VARCHAR(255) NOT NULL, degree VARCHAR(255) NOT NULL, major LONGTEXT DEFAULT NULL, INDEX IDX_169E6FB9770124B2 (college_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student (id INT AUTO_INCREMENT NOT NULL, academic_year_instance_id INT NOT NULL, student_examinee_id INT NOT NULL, student_no VARCHAR(20) NOT NULL, last_name VARCHAR(100) NOT NULL, first_name VARCHAR(100) NOT NULL, middle_name VARCHAR(100) DEFAULT NULL, extension_name VARCHAR(100) DEFAULT NULL, address LONGTEXT NOT NULL, barangay LONGTEXT NOT NULL, contact_no VARCHAR(20) NOT NULL, email VARCHAR(100) NOT NULL, gender VARCHAR(1) NOT NULL, birth_date DATE NOT NULL, birth_place LONGTEXT NOT NULL, civil_status VARCHAR(255) NOT NULL, religion LONGTEXT DEFAULT NULL, height SMALLINT NOT NULL, weight SMALLINT NOT NULL, year_profiled VARCHAR(4) NOT NULL, father_name VARCHAR(100) NOT NULL, father_occupation LONGTEXT NOT NULL, mother_name VARCHAR(100) NOT NULL, mother_occupation LONGTEXT NOT NULL, guadian VARCHAR(255) NOT NULL, relation_guardian VARCHAR(255) NOT NULL, guardian_contact_no VARCHAR(20) NOT NULL, maiden_name VARCHAR(100) NOT NULL, voter_id VARCHAR(255) NOT NULL, person_to_notify VARCHAR(255) NOT NULL, status VARCHAR(1) NOT NULL, INDEX IDX_B723AF33A1D018BB (academic_year_instance_id), UNIQUE INDEX UNIQ_B723AF339076E746 (student_examinee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE added_prof_load (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE building (id INT AUTO_INCREMENT NOT NULL, building_code VARCHAR(255) NOT NULL, building_name LONGTEXT NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE curriculum_subject_prerequisite (id INT AUTO_INCREMENT NOT NULL, curriculum_subject_id INT NOT NULL, subject_prerequisite JSON NOT NULL, remarks LONGTEXT DEFAULT NULL, INDEX IDX_585D86BAF740538D (curriculum_subject_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_profiling_details (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, course_id INT NOT NULL, curriculum_id INT NOT NULL, academic_year_instance_id INT NOT NULL, profiler_id INT NOT NULL, date_profiled DATE NOT NULL, remarks LONGTEXT NOT NULL, status VARCHAR(20) NOT NULL, INDEX IDX_AC4E8B75CB944F1A (student_id), INDEX IDX_AC4E8B75591CC992 (course_id), INDEX IDX_AC4E8B755AEA4428 (curriculum_id), INDEX IDX_AC4E8B75A1D018BB (academic_year_instance_id), INDEX IDX_AC4E8B759ABB1BEC (profiler_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exam_passing_score (id INT AUTO_INCREMENT NOT NULL, academic_year_id INT NOT NULL, score INT NOT NULL, UNIQUE INDEX UNIQ_BF66687CC54F3401 (academic_year_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_enrolled_subject (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, subject_offering_id INT NOT NULL, enrollment_detail_id INT NOT NULL, academic_year_instance_id INT NOT NULL, date_enrolled DATE NOT NULL, is_added_subject TINYINT(1) NOT NULL, INDEX IDX_5B4E2520CB944F1A (student_id), INDEX IDX_5B4E252016D6ACD4 (subject_offering_id), INDEX IDX_5B4E2520C57CDCF5 (enrollment_detail_id), INDEX IDX_5B4E2520A1D018BB (academic_year_instance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_examinee (id INT AUTO_INCREMENT NOT NULL, first_course_id INT NOT NULL, second_course_id INT DEFAULT NULL, academic_year_id INT NOT NULL, examinee_no VARCHAR(30) NOT NULL, examination_date DATE NOT NULL, venue LONGTEXT NOT NULL, examination_time TIME NOT NULL, last_name VARCHAR(100) NOT NULL, first_name VARCHAR(100) NOT NULL, middle_name VARCHAR(100) NOT NULL, extention_name VARCHAR(100) DEFAULT NULL, gender VARCHAR(1) NOT NULL, contact_no VARCHAR(20) NOT NULL, birth_date DATE NOT NULL, birth_place LONGTEXT NOT NULL, address LONGTEXT NOT NULL, last_school_attended LONGTEXT NOT NULL, last_school_address LONGTEXT NOT NULL, examination_score INT NOT NULL, profiling_status VARCHAR(2) NOT NULL, INDEX IDX_121A98F4A51159DC (first_course_id), INDEX IDX_121A98F464F7481A (second_course_id), INDEX IDX_121A98F4C54F3401 (academic_year_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE section (id INT AUTO_INCREMENT NOT NULL, curriculum_id INT NOT NULL, course_id INT NOT NULL, academic_year_instance_id INT NOT NULL, section_code VARCHAR(30) NOT NULL, section_name VARCHAR(30) NOT NULL, shift VARCHAR(30) NOT NULL, max_no_student SMALLINT NOT NULL, status VARCHAR(1) NOT NULL, INDEX IDX_2D737AEF5AEA4428 (curriculum_id), INDEX IDX_2D737AEF591CC992 (course_id), INDEX IDX_2D737AEFA1D018BB (academic_year_instance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE curriculum_subject_equivalence ADD CONSTRAINT FK_75405120F740538D FOREIGN KEY (curriculum_subject_id) REFERENCES curriculum_subject (id)');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT FK_729F519B4D2A7E12 FOREIGN KEY (building_id) REFERENCES building (id)');
        $this->addSql('ALTER TABLE academic_year_instance ADD CONSTRAINT FK_ED63CD51C54F3401 FOREIGN KEY (academic_year_id) REFERENCES academic_year (id)');
        $this->addSql('ALTER TABLE academic_year_instance ADD CONSTRAINT FK_ED63CD514A798B6F FOREIGN KEY (semester_id) REFERENCES semester (id)');
        $this->addSql('ALTER TABLE faculty_load ADD CONSTRAINT FK_A04B01488C03F15C FOREIGN KEY (employee_id) REFERENCES employee (id)');
        $this->addSql('ALTER TABLE faculty_load ADD CONSTRAINT FK_A04B0148CC6E2771 FOREIGN KEY (subject_offerring_id) REFERENCES subject_offering (id)');
        $this->addSql('ALTER TABLE curriculum ADD CONSTRAINT FK_7BE2A7C3C54F3401 FOREIGN KEY (academic_year_id) REFERENCES academic_year (id)');
        $this->addSql('ALTER TABLE curriculum ADD CONSTRAINT FK_7BE2A7C3591CC992 FOREIGN KEY (course_id) REFERENCES course (id)');
        $this->addSql('ALTER TABLE enrollment_details ADD CONSTRAINT FK_BCA960DFCB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE enrollment_details ADD CONSTRAINT FK_BCA960DF591CC992 FOREIGN KEY (course_id) REFERENCES course (id)');
        $this->addSql('ALTER TABLE enrollment_details ADD CONSTRAINT FK_BCA960DFD823E37A FOREIGN KEY (section_id) REFERENCES section (id)');
        $this->addSql('ALTER TABLE enrollment_details ADD CONSTRAINT FK_BCA960DFC54F3401 FOREIGN KEY (academic_year_id) REFERENCES academic_year (id)');
        $this->addSql('ALTER TABLE enrollment_details ADD CONSTRAINT FK_BCA960DF4A798B6F FOREIGN KEY (semester_id) REFERENCES semester (id)');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7AAE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
        $this->addSql('ALTER TABLE subject ADD CONSTRAINT FK_FBCE3E7A591CC992 FOREIGN KEY (course_id) REFERENCES course (id)');
        $this->addSql('ALTER TABLE student_grade ADD CONSTRAINT FK_D16DD7A947C28D26 FOREIGN KEY (student_subject_enrolled_id) REFERENCES student_enrolled_subject (id)');
        $this->addSql('ALTER TABLE student_grade ADD CONSTRAINT FK_D16DD7A94A798B6F FOREIGN KEY (semester_id) REFERENCES semester (id)');
        $this->addSql('ALTER TABLE student_grade ADD CONSTRAINT FK_D16DD7A98C03F15C FOREIGN KEY (employee_id) REFERENCES employee (id)');
        $this->addSql('ALTER TABLE employee ADD CONSTRAINT FK_5D9F75A1AE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
        $this->addSql('ALTER TABLE subject_offering ADD CONSTRAINT FK_9D156AD98C03F15C FOREIGN KEY (employee_id) REFERENCES employee (id)');
        $this->addSql('ALTER TABLE subject_offering ADD CONSTRAINT FK_9D156AD9A1D018BB FOREIGN KEY (academic_year_instance_id) REFERENCES academic_year_instance (id)');
        $this->addSql('ALTER TABLE subject_offering ADD CONSTRAINT FK_9D156AD9591CC992 FOREIGN KEY (course_id) REFERENCES course (id)');
        $this->addSql('ALTER TABLE subject_offering ADD CONSTRAINT FK_9D156AD9D823E37A FOREIGN KEY (section_id) REFERENCES section (id)');
        $this->addSql('ALTER TABLE subject_offering ADD CONSTRAINT FK_9D156AD9F740538D FOREIGN KEY (curriculum_subject_id) REFERENCES curriculum_subject (id)');
        $this->addSql('ALTER TABLE subject_offering ADD CONSTRAINT FK_9D156AD954177093 FOREIGN KEY (room_id) REFERENCES room (id)');
        $this->addSql('ALTER TABLE department ADD CONSTRAINT FK_CD1DE18A770124B2 FOREIGN KEY (college_id) REFERENCES college (id)');
        $this->addSql('ALTER TABLE curriculum_subject ADD CONSTRAINT FK_2C2D19645AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculum (id)');
        $this->addSql('ALTER TABLE curriculum_subject ADD CONSTRAINT FK_2C2D19644A798B6F FOREIGN KEY (semester_id) REFERENCES semester (id)');
        $this->addSql('ALTER TABLE curriculum_subject ADD CONSTRAINT FK_2C2D196423EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id)');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB9770124B2 FOREIGN KEY (college_id) REFERENCES college (id)');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF33A1D018BB FOREIGN KEY (academic_year_instance_id) REFERENCES academic_year_instance (id)');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF339076E746 FOREIGN KEY (student_examinee_id) REFERENCES student_examinee (id)');
        $this->addSql('ALTER TABLE curriculum_subject_prerequisite ADD CONSTRAINT FK_585D86BAF740538D FOREIGN KEY (curriculum_subject_id) REFERENCES curriculum_subject (id)');
        $this->addSql('ALTER TABLE student_profiling_details ADD CONSTRAINT FK_AC4E8B75CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE student_profiling_details ADD CONSTRAINT FK_AC4E8B75591CC992 FOREIGN KEY (course_id) REFERENCES course (id)');
        $this->addSql('ALTER TABLE student_profiling_details ADD CONSTRAINT FK_AC4E8B755AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculum (id)');
        $this->addSql('ALTER TABLE student_profiling_details ADD CONSTRAINT FK_AC4E8B75A1D018BB FOREIGN KEY (academic_year_instance_id) REFERENCES academic_year_instance (id)');
        $this->addSql('ALTER TABLE student_profiling_details ADD CONSTRAINT FK_AC4E8B759ABB1BEC FOREIGN KEY (profiler_id) REFERENCES employee (id)');
        $this->addSql('ALTER TABLE exam_passing_score ADD CONSTRAINT FK_BF66687CC54F3401 FOREIGN KEY (academic_year_id) REFERENCES academic_year (id)');
        $this->addSql('ALTER TABLE student_enrolled_subject ADD CONSTRAINT FK_5B4E2520CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE student_enrolled_subject ADD CONSTRAINT FK_5B4E252016D6ACD4 FOREIGN KEY (subject_offering_id) REFERENCES subject_offering (id)');
        $this->addSql('ALTER TABLE student_enrolled_subject ADD CONSTRAINT FK_5B4E2520C57CDCF5 FOREIGN KEY (enrollment_detail_id) REFERENCES enrollment_details (id)');
        $this->addSql('ALTER TABLE student_enrolled_subject ADD CONSTRAINT FK_5B4E2520A1D018BB FOREIGN KEY (academic_year_instance_id) REFERENCES academic_year_instance (id)');
        $this->addSql('ALTER TABLE student_examinee ADD CONSTRAINT FK_121A98F4A51159DC FOREIGN KEY (first_course_id) REFERENCES course (id)');
        $this->addSql('ALTER TABLE student_examinee ADD CONSTRAINT FK_121A98F464F7481A FOREIGN KEY (second_course_id) REFERENCES course (id)');
        $this->addSql('ALTER TABLE student_examinee ADD CONSTRAINT FK_121A98F4C54F3401 FOREIGN KEY (academic_year_id) REFERENCES academic_year (id)');
        $this->addSql('ALTER TABLE section ADD CONSTRAINT FK_2D737AEF5AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculum (id)');
        $this->addSql('ALTER TABLE section ADD CONSTRAINT FK_2D737AEF591CC992 FOREIGN KEY (course_id) REFERENCES course (id)');
        $this->addSql('ALTER TABLE section ADD CONSTRAINT FK_2D737AEFA1D018BB FOREIGN KEY (academic_year_instance_id) REFERENCES academic_year_instance (id)');
        $this->addSql('ALTER TABLE academic_year ADD is_accepting_examinee TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE subject_offering DROP FOREIGN KEY FK_9D156AD954177093');
        $this->addSql('ALTER TABLE subject_offering DROP FOREIGN KEY FK_9D156AD9A1D018BB');
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF33A1D018BB');
        $this->addSql('ALTER TABLE student_profiling_details DROP FOREIGN KEY FK_AC4E8B75A1D018BB');
        $this->addSql('ALTER TABLE student_enrolled_subject DROP FOREIGN KEY FK_5B4E2520A1D018BB');
        $this->addSql('ALTER TABLE section DROP FOREIGN KEY FK_2D737AEFA1D018BB');
        $this->addSql('ALTER TABLE curriculum_subject DROP FOREIGN KEY FK_2C2D19645AEA4428');
        $this->addSql('ALTER TABLE student_profiling_details DROP FOREIGN KEY FK_AC4E8B755AEA4428');
        $this->addSql('ALTER TABLE section DROP FOREIGN KEY FK_2D737AEF5AEA4428');
        $this->addSql('ALTER TABLE student_enrolled_subject DROP FOREIGN KEY FK_5B4E2520C57CDCF5');
        $this->addSql('ALTER TABLE curriculum_subject DROP FOREIGN KEY FK_2C2D196423EDC87');
        $this->addSql('ALTER TABLE department DROP FOREIGN KEY FK_CD1DE18A770124B2');
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB9770124B2');
        $this->addSql('ALTER TABLE academic_year_instance DROP FOREIGN KEY FK_ED63CD514A798B6F');
        $this->addSql('ALTER TABLE enrollment_details DROP FOREIGN KEY FK_BCA960DF4A798B6F');
        $this->addSql('ALTER TABLE student_grade DROP FOREIGN KEY FK_D16DD7A94A798B6F');
        $this->addSql('ALTER TABLE curriculum_subject DROP FOREIGN KEY FK_2C2D19644A798B6F');
        $this->addSql('ALTER TABLE faculty_load DROP FOREIGN KEY FK_A04B01488C03F15C');
        $this->addSql('ALTER TABLE student_grade DROP FOREIGN KEY FK_D16DD7A98C03F15C');
        $this->addSql('ALTER TABLE subject_offering DROP FOREIGN KEY FK_9D156AD98C03F15C');
        $this->addSql('ALTER TABLE student_profiling_details DROP FOREIGN KEY FK_AC4E8B759ABB1BEC');
        $this->addSql('ALTER TABLE faculty_load DROP FOREIGN KEY FK_A04B0148CC6E2771');
        $this->addSql('ALTER TABLE student_enrolled_subject DROP FOREIGN KEY FK_5B4E252016D6ACD4');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7AAE80F5DF');
        $this->addSql('ALTER TABLE employee DROP FOREIGN KEY FK_5D9F75A1AE80F5DF');
        $this->addSql('ALTER TABLE curriculum_subject_equivalence DROP FOREIGN KEY FK_75405120F740538D');
        $this->addSql('ALTER TABLE subject_offering DROP FOREIGN KEY FK_9D156AD9F740538D');
        $this->addSql('ALTER TABLE curriculum_subject_prerequisite DROP FOREIGN KEY FK_585D86BAF740538D');
        $this->addSql('ALTER TABLE curriculum DROP FOREIGN KEY FK_7BE2A7C3591CC992');
        $this->addSql('ALTER TABLE enrollment_details DROP FOREIGN KEY FK_BCA960DF591CC992');
        $this->addSql('ALTER TABLE subject DROP FOREIGN KEY FK_FBCE3E7A591CC992');
        $this->addSql('ALTER TABLE subject_offering DROP FOREIGN KEY FK_9D156AD9591CC992');
        $this->addSql('ALTER TABLE student_profiling_details DROP FOREIGN KEY FK_AC4E8B75591CC992');
        $this->addSql('ALTER TABLE student_examinee DROP FOREIGN KEY FK_121A98F4A51159DC');
        $this->addSql('ALTER TABLE student_examinee DROP FOREIGN KEY FK_121A98F464F7481A');
        $this->addSql('ALTER TABLE section DROP FOREIGN KEY FK_2D737AEF591CC992');
        $this->addSql('ALTER TABLE enrollment_details DROP FOREIGN KEY FK_BCA960DFCB944F1A');
        $this->addSql('ALTER TABLE student_profiling_details DROP FOREIGN KEY FK_AC4E8B75CB944F1A');
        $this->addSql('ALTER TABLE student_enrolled_subject DROP FOREIGN KEY FK_5B4E2520CB944F1A');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY FK_729F519B4D2A7E12');
        $this->addSql('ALTER TABLE student_grade DROP FOREIGN KEY FK_D16DD7A947C28D26');
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF339076E746');
        $this->addSql('ALTER TABLE enrollment_details DROP FOREIGN KEY FK_BCA960DFD823E37A');
        $this->addSql('ALTER TABLE subject_offering DROP FOREIGN KEY FK_9D156AD9D823E37A');
        $this->addSql('DROP TABLE curriculum_subject_equivalence');
        $this->addSql('DROP TABLE room');
        $this->addSql('DROP TABLE academic_year_instance');
        $this->addSql('DROP TABLE faculty_load');
        $this->addSql('DROP TABLE curriculum');
        $this->addSql('DROP TABLE enrollment_details');
        $this->addSql('DROP TABLE subject');
        $this->addSql('DROP TABLE college');
        $this->addSql('DROP TABLE student_grade');
        $this->addSql('DROP TABLE semester');
        $this->addSql('DROP TABLE employee');
        $this->addSql('DROP TABLE subject_offering');
        $this->addSql('DROP TABLE department');
        $this->addSql('DROP TABLE curriculum_subject');
        $this->addSql('DROP TABLE course');
        $this->addSql('DROP TABLE student');
        $this->addSql('DROP TABLE added_prof_load');
        $this->addSql('DROP TABLE building');
        $this->addSql('DROP TABLE curriculum_subject_prerequisite');
        $this->addSql('DROP TABLE student_profiling_details');
        $this->addSql('DROP TABLE exam_passing_score');
        $this->addSql('DROP TABLE student_enrolled_subject');
        $this->addSql('DROP TABLE student_examinee');
        $this->addSql('DROP TABLE section');
        $this->addSql('ALTER TABLE academic_year DROP is_accepting_examinee');
    }
}
