<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230821090904 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant_esprit CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE moyenne1 moyenne1 VARCHAR(20) NOT NULL, CHANGE niveau_fr niveau_fr VARCHAR(255) NOT NULL, CHANGE niveau_an niveau_an VARCHAR(255) NOT NULL, CHANGE id_etudiant id_etudiant VARCHAR(20) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant_esprit CHANGE prenom prenom VARCHAR(50) NOT NULL, CHANGE id_etudiant id_etudiant VARCHAR(255) NOT NULL, CHANGE moyenne1 moyenne1 VARCHAR(255) NOT NULL, CHANGE niveau_fr niveau_fr VARCHAR(20) NOT NULL, CHANGE niveau_an niveau_an VARCHAR(20) NOT NULL');
    }
}
