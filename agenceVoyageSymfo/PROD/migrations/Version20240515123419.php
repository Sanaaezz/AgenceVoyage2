<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240515123419 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO `categorie` (`id`, `nom_categorie`) VALUES
(1, 'Sportive'),
(2, 'Toute la famille'),
(3, 'Soleil'),
(4, 'Mer'),
(5, 'Montagne')");

$this->addSql("INSERT INTO `destination` (`id`, `pays`) VALUES
(1, 'Tibet'),
(2, 'Maroc'),
(3, 'France'),
(4, 'Islande'),
(5, 'Laponie');");
        $this->addSql("INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240502133611', '2024-05-02 13:36:29', 262),
('DoctrineMigrations\\Version20240502134316', '2024-05-02 13:43:41', 460),
('DoctrineMigrations\\Version20240502134929', '2024-05-02 13:49:45', 61),
('DoctrineMigrations\\Version20240502140523', '2024-05-02 14:05:37', 173),
('DoctrineMigrations\\Version20240502141233', '2024-05-02 14:12:49', 31),
('DoctrineMigrations\\Version20240502143408', '2024-05-02 14:34:23', 2851),
('DoctrineMigrations\\Version20240502143631', '2024-05-02 14:36:54', 69),
('DoctrineMigrations\\Version20240503134955', '2024-05-03 13:50:26', 595),
('DoctrineMigrations\\Version20240503140519', '2024-05-03 14:05:35', 780),
('DoctrineMigrations\\Version20240503141335', '2024-05-03 14:13:49', 532),
('DoctrineMigrations\\Version20240507081524', '2024-05-07 08:15:38', 187);");
        $this->addSql("INSERT INTO `utilisateur` (`id`, `email`, `roles`, `password`, `nom_utilisateur`, `prenom_utilisateur`, `telephone_utilisateur`, `is_verified`) VALUES
(1, 'sanaa@gmail.com', '[\"ROLE_SUPER_ADMIN\"]', '$2y$13\$bJBs75Lz4KJvEvY1hrjx1ujjCCJjkC3ifUugtpdXZxrRI9dohYiwW', 'sanaa', 'sanaa', '0123456789', 0),
(2, 'bou@gmail.com', '[]', '$2y$13\$RzLmPk/InoppGEVXKWlbi.ZvmFmy1t4.A2G7h99pQQ/jFz1edzlKa', 'bou', 'bou@', '0987654321', 0);
");
        $this->addSql("INSERT INTO `voyage` (`id`, `nom_voyage`, `photo_voyage`, `duree_voyage`, `date_depart_voyage`, `date_retour_voyage`, `visibility_voyage`, `prix_voyage`, `description_voyage`, `user_id`, `description`) VALUES
(1, 'zen', 'https://images.unsplash.com/photo-1560389959-e4e81f5dca86?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGliZXR8ZW58MHx8MHx8fDA%3D', 21, '2024-06-07', '2024-06-28', NULL, NULL, NULL, NULL, ''),
(2, 'vol au dessus d un nid de coucou', 'https://images.unsplash.com/photo-1507608616759-54f48f0af0ee?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8dHJhdmVsfGVufDB8fDB8fHww', 3, '2024-07-18', '2024-07-20', NULL, 450, NULL, NULL, ''),
(4, 'erghfghf', 'http://sfdg', 4, '2024-05-08', '2024-05-22', NULL, 23456, 'ghvjkkl', NULL, ''),
(5, 'etoiles', 'https://images.unsplash.com/photo-1507272931001-fc06c17e4f43?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGJvcmVhbHxlbnwwfHwwfHx8MA%3D%3D', 15, '2024-06-24', '2024-05-30', NULL, 2300, 'jhgjfdggfgluoiutiryuterztedxfcvb higlhj gljk;j,bnvc', NULL, '');
");
        $this->addSql("INSERT INTO `voyage_categorie` (`voyage_id`, `categorie_id`) VALUES
(1, 1),
(1, 5);");
        $this->addSql("INSERT INTO `voyage_destination` (`voyage_id`, `destination_id`) VALUES
(1, 1),
(2, 3),
(4, 4),
(5, 5);");

        $this->addSql('ALTER TABLE voyage DROP description, CHANGE nom_voyage nom_voyage VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voyage ADD description VARCHAR(255) NOT NULL, CHANGE nom_voyage nom_voyage VARCHAR(255) NOT NULL');
    }
}
