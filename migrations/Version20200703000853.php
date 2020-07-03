<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200703000853 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE card (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, context LONGTEXT NOT NULL, INDEX IDX_161498D312469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE choice (id INT AUTO_INCREMENT NOT NULL, card_id INT NOT NULL, label VARCHAR(300) NOT NULL, money INT NOT NULL, opinion INT NOT NULL, search INT NOT NULL, INDEX IDX_C1AB5A924ACC9A20 (card_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE consequence (id INT AUTO_INCREMENT NOT NULL, card_id INT DEFAULT NULL, label VARCHAR(255) NOT NULL, context LONGTEXT NOT NULL, context_success VARCHAR(255) NOT NULL, button_text_success VARCHAR(255) NOT NULL, image_success VARCHAR(255) NOT NULL, money_success INT NOT NULL, opinion_success INT NOT NULL, search_success INT NOT NULL, context_fail VARCHAR(255) NOT NULL, button_text_fail VARCHAR(255) NOT NULL, image_fail VARCHAR(255) NOT NULL, money_fail INT NOT NULL, opinion_fail INT NOT NULL, search_fail INT NOT NULL, UNIQUE INDEX UNIQ_21584C5C4ACC9A20 (card_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D312469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE choice ADD CONSTRAINT FK_C1AB5A924ACC9A20 FOREIGN KEY (card_id) REFERENCES card (id)');
        $this->addSql('ALTER TABLE consequence ADD CONSTRAINT FK_21584C5C4ACC9A20 FOREIGN KEY (card_id) REFERENCES card (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE choice DROP FOREIGN KEY FK_C1AB5A924ACC9A20');
        $this->addSql('ALTER TABLE consequence DROP FOREIGN KEY FK_21584C5C4ACC9A20');
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D312469DE2');
        $this->addSql('DROP TABLE card');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE choice');
        $this->addSql('DROP TABLE consequence');
    }
}
