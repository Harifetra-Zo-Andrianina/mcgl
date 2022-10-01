<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220918094922 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rapport (id INT AUTO_INCREMENT NOT NULL, p1 VARCHAR(300) DEFAULT NULL, p2 VARCHAR(200) DEFAULT NULL, p3 INT DEFAULT NULL, p4 INT DEFAULT NULL, p5 INT DEFAULT NULL, p6 INT DEFAULT NULL, p7 INT DEFAULT NULL, p8 INT DEFAULT NULL, p9 INT DEFAULT NULL, p10 INT DEFAULT NULL, date DATE DEFAULT NULL, modifie TINYINT(1) DEFAULT NULL, type INT DEFAULT NULL, local VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE rapport');
    }
}
