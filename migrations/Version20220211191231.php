<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220211191231 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agence CHANGE phone phone VARCHAR(20) DEFAULT NULL, CHANGE address address VARCHAR(255) DEFAULT NULL, CHANGE id_bank idbank INT NOT NULL');
        $this->addSql('ALTER TABLE bank CHANGE address address VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(20) DEFAULT NULL');
        $this->addSql('ALTER TABLE file CHANGE count count INT NOT NULL, CHANGE called_number called_number INT NOT NULL, CHANGE date_file date_file DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agence CHANGE nom_agence nom_agence VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE address address VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(20) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE idbank id_bank INT NOT NULL');
        $this->addSql('ALTER TABLE bank CHANGE nom_bank nom_bank VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE address address VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(20) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE file CHANGE count count INT DEFAULT 0 NOT NULL, CHANGE called_number called_number INT DEFAULT 0 NOT NULL, CHANGE date_file date_file DATETIME DEFAULT \'current_timestamp()\' NOT NULL');
        $this->addSql('ALTER TABLE region CHANGE nom_region nom_region VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
