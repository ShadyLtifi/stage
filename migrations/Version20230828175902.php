<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230828175902 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, opportinute_id INT NOT NULL, etudiant_esprit_id INT NOT NULL, INDEX IDX_E33BD3B8DFFB57AC (opportinute_id), INDEX IDX_E33BD3B85F54E175 (etudiant_esprit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opportinute (id INT AUTO_INCREMENT NOT NULL, nom_faculte VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, datefin DATE NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8DFFB57AC FOREIGN KEY (opportinute_id) REFERENCES opportinute (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B85F54E175 FOREIGN KEY (etudiant_esprit_id) REFERENCES etudiant_esprit (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8DFFB57AC');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B85F54E175');
        $this->addSql('DROP TABLE candidature');
        $this->addSql('DROP TABLE opportinute');
    }
}
