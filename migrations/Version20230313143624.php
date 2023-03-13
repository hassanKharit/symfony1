<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230313143624 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE annonce (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, discription VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, discription VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, titre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rcategorie (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rcategorie_rcategorie (rcategorie_source INT NOT NULL, rcategorie_target INT NOT NULL, INDEX IDX_A253105B4C703116 (rcategorie_source), INDEX IDX_A253105B55956199 (rcategorie_target), PRIMARY KEY(rcategorie_source, rcategorie_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rproduit (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rcategorie_rcategorie ADD CONSTRAINT FK_A253105B4C703116 FOREIGN KEY (rcategorie_source) REFERENCES rcategorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rcategorie_rcategorie ADD CONSTRAINT FK_A253105B55956199 FOREIGN KEY (rcategorie_target) REFERENCES rcategorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rcategorie_rcategorie DROP FOREIGN KEY FK_A253105B4C703116');
        $this->addSql('ALTER TABLE rcategorie_rcategorie DROP FOREIGN KEY FK_A253105B55956199');
        $this->addSql('DROP TABLE annonce');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE rcategorie');
        $this->addSql('DROP TABLE rcategorie_rcategorie');
        $this->addSql('DROP TABLE rproduit');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
    }
}
