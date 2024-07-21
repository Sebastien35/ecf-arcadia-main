<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240706132521 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F20AE7A39');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F20AE7A39 FOREIGN KEY (habitat_id_id) REFERENCES habitat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F20AE7A39');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F20AE7A39 FOREIGN KEY (habitat_id_id) REFERENCES animal (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
