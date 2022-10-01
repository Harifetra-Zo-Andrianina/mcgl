<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220927052223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE centre (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(300) DEFAULT NULL, code VARCHAR(50) DEFAULT NULL, region VARCHAR(100) DEFAULT NULL, district VARCHAR(100) DEFAULT NULL, rattachement VARCHAR(300) DEFAULT NULL, operateur VARCHAR(200) DEFAULT NULL, modifie TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE configuration (id INT AUTO_INCREMENT NOT NULL, cle VARCHAR(20) NOT NULL, valeur VARCHAR(300) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intrant (id INT AUTO_INCREMENT NOT NULL, centre_id INT DEFAULT NULL, date DATE DEFAULT NULL, local VARCHAR(100) DEFAULT NULL, type INT DEFAULT NULL, p1 VARCHAR(200) DEFAULT NULL, p2 INT DEFAULT NULL, p3 INT DEFAULT NULL, p4 INT DEFAULT NULL, modifie TINYINT(1) DEFAULT NULL, INDEX IDX_99DBC461463CD7C3 (centre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE make_migration (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parametre (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(50) NOT NULL, valeur VARCHAR(150) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rapport (id INT AUTO_INCREMENT NOT NULL, centre_id INT DEFAULT NULL, p1 VARCHAR(300) DEFAULT NULL, p2 VARCHAR(200) DEFAULT NULL, p3 INT DEFAULT NULL, p4 INT DEFAULT NULL, p5 INT DEFAULT NULL, p6 INT DEFAULT NULL, p7 INT DEFAULT NULL, p8 INT DEFAULT NULL, p9 INT DEFAULT NULL, p10 INT DEFAULT NULL, date DATE DEFAULT NULL, modifie TINYINT(1) DEFAULT NULL, type INT DEFAULT NULL, local VARCHAR(100) DEFAULT NULL, remarque VARCHAR(500) DEFAULT NULL, INDEX IDX_BE34A09C463CD7C3 (centre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tablette (id INT AUTO_INCREMENT NOT NULL, centre_id INT DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, login VARCHAR(100) DEFAULT NULL, password VARCHAR(20) DEFAULT NULL, sim VARCHAR(15) DEFAULT NULL, actif TINYINT(1) DEFAULT NULL, INDEX IDX_508CDDD7463CD7C3 (centre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, nom VARCHAR(150) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE intrant ADD CONSTRAINT FK_99DBC461463CD7C3 FOREIGN KEY (centre_id) REFERENCES centre (id)');
        $this->addSql('ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09C463CD7C3 FOREIGN KEY (centre_id) REFERENCES centre (id)');
        $this->addSql('ALTER TABLE tablette ADD CONSTRAINT FK_508CDDD7463CD7C3 FOREIGN KEY (centre_id) REFERENCES centre (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE intrant DROP FOREIGN KEY FK_99DBC461463CD7C3');
        $this->addSql('ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09C463CD7C3');
        $this->addSql('ALTER TABLE tablette DROP FOREIGN KEY FK_508CDDD7463CD7C3');
        $this->addSql('DROP TABLE centre');
        $this->addSql('DROP TABLE configuration');
        $this->addSql('DROP TABLE intrant');
        $this->addSql('DROP TABLE make_migration');
        $this->addSql('DROP TABLE parametre');
        $this->addSql('DROP TABLE rapport');
        $this->addSql('DROP TABLE tablette');
        $this->addSql('DROP TABLE user');
    }
}
