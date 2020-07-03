<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200703115306 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE choice ADD consequence_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE choice ADD CONSTRAINT FK_C1AB5A923A9BCB0A FOREIGN KEY (consequence_id) REFERENCES consequence (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C1AB5A923A9BCB0A ON choice (consequence_id)');
        $this->addSql('ALTER TABLE consequence DROP FOREIGN KEY FK_21584C5C4ACC9A20');
        $this->addSql('DROP INDEX UNIQ_21584C5C4ACC9A20 ON consequence');
        $this->addSql('ALTER TABLE consequence DROP card_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE choice DROP FOREIGN KEY FK_C1AB5A923A9BCB0A');
        $this->addSql('DROP INDEX UNIQ_C1AB5A923A9BCB0A ON choice');
        $this->addSql('ALTER TABLE choice DROP consequence_id');
        $this->addSql('ALTER TABLE consequence ADD card_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE consequence ADD CONSTRAINT FK_21584C5C4ACC9A20 FOREIGN KEY (card_id) REFERENCES card (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_21584C5C4ACC9A20 ON consequence (card_id)');
    }
}
