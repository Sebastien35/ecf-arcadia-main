<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240709113639 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal_feeding RENAME INDEX idx_28d48d665eb747a3 TO IDX_28D48D668E962C16');
        $this->addSql('ALTER TABLE animal_feeding RENAME INDEX idx_28d48d669d86650f TO IDX_28D48D66A76ED395');
        $this->addSql('ALTER TABLE veterinary_report RENAME INDEX idx_53c7e56b5eb747a3 TO IDX_53C7E56B8E962C16');
        $this->addSql('ALTER TABLE veterinary_report RENAME INDEX idx_53c7e56b9d86650f TO IDX_53C7E56BA76ED395');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE veterinary_report RENAME INDEX idx_53c7e56b8e962c16 TO IDX_53C7E56B5EB747A3');
        $this->addSql('ALTER TABLE veterinary_report RENAME INDEX idx_53c7e56ba76ed395 TO IDX_53C7E56B9D86650F');
        $this->addSql('ALTER TABLE animal_feeding RENAME INDEX idx_28d48d668e962c16 TO IDX_28D48D665EB747A3');
        $this->addSql('ALTER TABLE animal_feeding RENAME INDEX idx_28d48d66a76ed395 TO IDX_28D48D669D86650F');
    }
}
