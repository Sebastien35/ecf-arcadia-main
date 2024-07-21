<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240704144220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal_feedings (id INT AUTO_INCREMENT NOT NULL, animal_id_id INT DEFAULT NULL, user_id_id INT DEFAULT NULL, feeding_date DATETIME NOT NULL, food VARCHAR(255) NOT NULL, quantity NUMERIC(5, 2) NOT NULL, INDEX IDX_BFF7DFEB5EB747A3 (animal_id_id), INDEX IDX_BFF7DFEB9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE animals (id INT AUTO_INCREMENT NOT NULL, habitat_id_id INT NOT NULL, name VARCHAR(100) NOT NULL, race VARCHAR(255) NOT NULL, images JSON NOT NULL, INDEX IDX_966C69DD20AE7A39 (habitat_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE habitats (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, images JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reviews (id INT AUTO_INCREMENT NOT NULL, pseudo VARCHAR(255) NOT NULL, review LONGTEXT NOT NULL, valid TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, images JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE veterinary_reports (id INT AUTO_INCREMENT NOT NULL, animal_id_id INT DEFAULT NULL, user_id_id INT DEFAULT NULL, health_status LONGTEXT NOT NULL, food VARCHAR(255) NOT NULL, food_weight NUMERIC(5, 2) NOT NULL, report_date DATETIME NOT NULL, details LONGTEXT NOT NULL, INDEX IDX_C13DB03E5EB747A3 (animal_id_id), INDEX IDX_C13DB03E9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animal_feedings ADD CONSTRAINT FK_BFF7DFEB5EB747A3 FOREIGN KEY (animal_id_id) REFERENCES animals (id)');
        $this->addSql('ALTER TABLE animal_feedings ADD CONSTRAINT FK_BFF7DFEB9D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE animals ADD CONSTRAINT FK_966C69DD20AE7A39 FOREIGN KEY (habitat_id_id) REFERENCES habitats (id)');
        $this->addSql('ALTER TABLE veterinary_reports ADD CONSTRAINT FK_C13DB03E5EB747A3 FOREIGN KEY (animal_id_id) REFERENCES animals (id)');
        $this->addSql('ALTER TABLE veterinary_reports ADD CONSTRAINT FK_C13DB03E9D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal_feedings DROP FOREIGN KEY FK_BFF7DFEB5EB747A3');
        $this->addSql('ALTER TABLE animal_feedings DROP FOREIGN KEY FK_BFF7DFEB9D86650F');
        $this->addSql('ALTER TABLE animals DROP FOREIGN KEY FK_966C69DD20AE7A39');
        $this->addSql('ALTER TABLE veterinary_reports DROP FOREIGN KEY FK_C13DB03E5EB747A3');
        $this->addSql('ALTER TABLE veterinary_reports DROP FOREIGN KEY FK_C13DB03E9D86650F');
        $this->addSql('DROP TABLE animal_feedings');
        $this->addSql('DROP TABLE animals');
        $this->addSql('DROP TABLE habitats');
        $this->addSql('DROP TABLE reviews');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE veterinary_reports');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
