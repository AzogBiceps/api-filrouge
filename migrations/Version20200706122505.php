<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200706122505 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE game (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, information LONGTEXT NOT NULL, rules LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE step_card (id INT AUTO_INCREMENT NOT NULL, game_id INT DEFAULT NULL, step_season VARCHAR(255) NOT NULL, label VARCHAR(255) NOT NULL, label_win VARCHAR(255) NOT NULL, message_win VARCHAR(255) NOT NULL, picture_win VARCHAR(255) NOT NULL, money_win INT NOT NULL, opinion_win INT NOT NULL, search_win INT NOT NULL, label_loose VARCHAR(255) NOT NULL, message_loose VARCHAR(255) NOT NULL, picture_loose VARCHAR(255) NOT NULL, money_loose INT NOT NULL, opinion_loose INT NOT NULL, search_loose INT NOT NULL, UNIQUE INDEX UNIQ_58820582E48FD905 (game_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE step_card ADD CONSTRAINT FK_58820582E48FD905 FOREIGN KEY (game_id) REFERENCES game (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE step_card DROP FOREIGN KEY FK_58820582E48FD905');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE step_card');
    }
}
