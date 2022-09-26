<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220918083233 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tablette (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, login VARCHAR(100) DEFAULT NULL, password VARCHAR(20) DEFAULT NULL, sim VARCHAR(15) DEFAULT NULL, actif TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE centre ADD region VARCHAR(100) DEFAULT NULL, ADD district VARCHAR(100) DEFAULT NULL, ADD rattachement VARCHAR(300) DEFAULT NULL, ADD operateur VARCHAR(200) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tablette');
        $this->addSql('ALTER TABLE centre DROP region, DROP district, DROP rattachement, DROP operateur');
    }
}
