<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220918084135 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE centre ADD modifie TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE tablette ADD centre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tablette ADD CONSTRAINT FK_508CDDD7463CD7C3 FOREIGN KEY (centre_id) REFERENCES centre (id)');
        $this->addSql('CREATE INDEX IDX_508CDDD7463CD7C3 ON tablette (centre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE centre DROP modifie');
        $this->addSql('ALTER TABLE tablette DROP FOREIGN KEY FK_508CDDD7463CD7C3');
        $this->addSql('DROP INDEX IDX_508CDDD7463CD7C3 ON tablette');
        $this->addSql('ALTER TABLE tablette DROP centre_id');
    }
}
