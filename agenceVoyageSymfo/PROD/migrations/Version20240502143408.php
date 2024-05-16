<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240502143408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE voyage_categorie (voyage_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_7B84F8AA68C9E5AF (voyage_id), INDEX IDX_7B84F8AABCF5E72D (categorie_id), PRIMARY KEY(voyage_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voyage_destination (voyage_id INT NOT NULL, destination_id INT NOT NULL, INDEX IDX_DD2A60868C9E5AF (voyage_id), INDEX IDX_DD2A608816C6140 (destination_id), PRIMARY KEY(voyage_id, destination_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE voyage_categorie ADD CONSTRAINT FK_7B84F8AA68C9E5AF FOREIGN KEY (voyage_id) REFERENCES voyage (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE voyage_categorie ADD CONSTRAINT FK_7B84F8AABCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE voyage_destination ADD CONSTRAINT FK_DD2A60868C9E5AF FOREIGN KEY (voyage_id) REFERENCES voyage (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE voyage_destination ADD CONSTRAINT FK_DD2A608816C6140 FOREIGN KEY (destination_id) REFERENCES destination (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contact ADD voyage_id INT DEFAULT NULL, ADD statut_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E63868C9E5AF FOREIGN KEY (voyage_id) REFERENCES voyage (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638F6203804 FOREIGN KEY (statut_id) REFERENCES statut (id)');
        $this->addSql('CREATE INDEX IDX_4C62E63868C9E5AF ON contact (voyage_id)');
        $this->addSql('CREATE INDEX IDX_4C62E638F6203804 ON contact (statut_id)');
        $this->addSql('ALTER TABLE voyage ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D8955FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_3F9D8955FB88E14F ON voyage (utilisateur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voyage_categorie DROP FOREIGN KEY FK_7B84F8AA68C9E5AF');
        $this->addSql('ALTER TABLE voyage_categorie DROP FOREIGN KEY FK_7B84F8AABCF5E72D');
        $this->addSql('ALTER TABLE voyage_destination DROP FOREIGN KEY FK_DD2A60868C9E5AF');
        $this->addSql('ALTER TABLE voyage_destination DROP FOREIGN KEY FK_DD2A608816C6140');
        $this->addSql('DROP TABLE voyage_categorie');
        $this->addSql('DROP TABLE voyage_destination');
        $this->addSql('ALTER TABLE voyage DROP FOREIGN KEY FK_3F9D8955FB88E14F');
        $this->addSql('DROP INDEX IDX_3F9D8955FB88E14F ON voyage');
        $this->addSql('ALTER TABLE voyage DROP utilisateur_id');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E63868C9E5AF');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638F6203804');
        $this->addSql('DROP INDEX IDX_4C62E63868C9E5AF ON contact');
        $this->addSql('DROP INDEX IDX_4C62E638F6203804 ON contact');
        $this->addSql('ALTER TABLE contact DROP voyage_id, DROP statut_id');
    }
}
