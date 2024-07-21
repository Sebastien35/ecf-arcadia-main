<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240705082442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal (id INT AUTO_INCREMENT NOT NULL, habitat_id_id INT NOT NULL, name VARCHAR(150) NOT NULL, race VARCHAR(150) NOT NULL, image JSON NOT NULL, INDEX IDX_6AAB231F20AE7A39 (habitat_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE animal_feeding (id INT AUTO_INCREMENT NOT NULL, animal_id_id INT NOT NULL, user_id_id INT NOT NULL, feeding_date DATETIME NOT NULL, food VARCHAR(100) NOT NULL, quantity NUMERIC(5, 2) NOT NULL, INDEX IDX_28D48D665EB747A3 (animal_id_id), INDEX IDX_28D48D669D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE habitat (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, image JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, pseudo VARCHAR(30) NOT NULL, review LONGTEXT NOT NULL, valid TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE schedule (id INT AUTO_INCREMENT NOT NULL, day VARCHAR(30) NOT NULL, opening_time TIME NOT NULL, closing_time TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, image JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE veterinary_report (id INT AUTO_INCREMENT NOT NULL, animal_id_id INT NOT NULL, user_id_id INT NOT NULL, health_status LONGTEXT NOT NULL, food VARCHAR(100) NOT NULL, food_weight NUMERIC(5, 2) NOT NULL, report_date DATETIME NOT NULL, detail LONGTEXT NOT NULL, INDEX IDX_53C7E56B5EB747A3 (animal_id_id), INDEX IDX_53C7E56B9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F20AE7A39 FOREIGN KEY (habitat_id_id) REFERENCES animal (id)');
        $this->addSql('ALTER TABLE animal_feeding ADD CONSTRAINT FK_28D48D665EB747A3 FOREIGN KEY (animal_id_id) REFERENCES animal (id)');
        $this->addSql('ALTER TABLE animal_feeding ADD CONSTRAINT FK_28D48D669D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE veterinary_report ADD CONSTRAINT FK_53C7E56B5EB747A3 FOREIGN KEY (animal_id_id) REFERENCES animal (id)');
        $this->addSql('ALTER TABLE veterinary_report ADD CONSTRAINT FK_53C7E56B9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE animal_feedings DROP FOREIGN KEY FK_BFF7DFEB5EB747A3');
        $this->addSql('ALTER TABLE animal_feedings DROP FOREIGN KEY FK_BFF7DFEB9D86650F');
        $this->addSql('ALTER TABLE animals DROP FOREIGN KEY FK_966C69DD20AE7A39');
        $this->addSql('ALTER TABLE veterinary_reports DROP FOREIGN KEY FK_C13DB03E5EB747A3');
        $this->addSql('ALTER TABLE veterinary_reports DROP FOREIGN KEY FK_C13DB03E9D86650F');
        $this->addSql('DROP TABLE animal_feedings');
        $this->addSql('DROP TABLE animals');
        $this->addSql('DROP TABLE reviews');
        $this->addSql('DROP TABLE habitats');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE veterinary_reports');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal_feedings (id INT AUTO_INCREMENT NOT NULL, animal_id_id INT DEFAULT NULL, user_id_id INT DEFAULT NULL, feeding_date DATETIME NOT NULL, food VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, quantity NUMERIC(5, 2) NOT NULL, INDEX IDX_BFF7DFEB5EB747A3 (animal_id_id), INDEX IDX_BFF7DFEB9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE animals (id INT AUTO_INCREMENT NOT NULL, habitat_id_id INT NOT NULL, name VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, race VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, images JSON NOT NULL, INDEX IDX_966C69DD20AE7A39 (habitat_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reviews (id INT AUTO_INCREMENT NOT NULL, pseudo VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, review LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, valid TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE habitats (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, images JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, images JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, role JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE veterinary_reports (id INT AUTO_INCREMENT NOT NULL, animal_id_id INT DEFAULT NULL, user_id_id INT DEFAULT NULL, health_status LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, food VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, food_weight NUMERIC(5, 2) NOT NULL, report_date DATETIME NOT NULL, details LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_C13DB03E5EB747A3 (animal_id_id), INDEX IDX_C13DB03E9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE animal_feedings ADD CONSTRAINT FK_BFF7DFEB5EB747A3 FOREIGN KEY (animal_id_id) REFERENCES animals (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE animal_feedings ADD CONSTRAINT FK_BFF7DFEB9D86650F FOREIGN KEY (user_id_id) REFERENCES users (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE animals ADD CONSTRAINT FK_966C69DD20AE7A39 FOREIGN KEY (habitat_id_id) REFERENCES habitats (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE veterinary_reports ADD CONSTRAINT FK_C13DB03E5EB747A3 FOREIGN KEY (animal_id_id) REFERENCES animals (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE veterinary_reports ADD CONSTRAINT FK_C13DB03E9D86650F FOREIGN KEY (user_id_id) REFERENCES users (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F20AE7A39');
        $this->addSql('ALTER TABLE animal_feeding DROP FOREIGN KEY FK_28D48D665EB747A3');
        $this->addSql('ALTER TABLE animal_feeding DROP FOREIGN KEY FK_28D48D669D86650F');
        $this->addSql('ALTER TABLE veterinary_report DROP FOREIGN KEY FK_53C7E56B5EB747A3');
        $this->addSql('ALTER TABLE veterinary_report DROP FOREIGN KEY FK_53C7E56B9D86650F');
        $this->addSql('DROP TABLE animal');
        $this->addSql('DROP TABLE animal_feeding');
        $this->addSql('DROP TABLE habitat');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE schedule');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE veterinary_report');
    }
}
