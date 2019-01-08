<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181019160302 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE matches DROP FOREIGN KEY matches_ibfk_1');
        $this->addSql('ALTER TABLE matches DROP FOREIGN KEY matches_ibfk_2');
        $this->addSql('CREATE TABLE matches_entity (id INT AUTO_INCREMENT NOT NULL, id_team1 INT DEFAULT NULL, id_team2 INT DEFAULT NULL, start DATETIME DEFAULT NULL, end DATETIME DEFAULT NULL, winner INT DEFAULT NULL, INDEX IDX_4BEFA555E09543D4 (id_team1), INDEX IDX_4BEFA555799C126E (id_team2), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE matches_entity ADD CONSTRAINT FK_4BEFA555E09543D4 FOREIGN KEY (id_team1) REFERENCES team_entity (id)');
        $this->addSql('ALTER TABLE matches_entity ADD CONSTRAINT FK_4BEFA555799C126E FOREIGN KEY (id_team2) REFERENCES team_entity (id)');
        $this->addSql('DROP TABLE matches');
        $this->addSql('DROP TABLE teams');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE matches (id INT AUTO_INCREMENT NOT NULL, id_team1 INT DEFAULT NULL, id_team2 INT DEFAULT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, winner INT NOT NULL, INDEX id_team1 (id_team1), INDEX id_team2 (id_team2), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teams (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_general_ci, skill_mu DOUBLE PRECISION NOT NULL, skill_sigma DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE matches ADD CONSTRAINT matches_ibfk_1 FOREIGN KEY (id_team1) REFERENCES teams (id)');
        $this->addSql('ALTER TABLE matches ADD CONSTRAINT matches_ibfk_2 FOREIGN KEY (id_team2) REFERENCES teams (id)');
        $this->addSql('DROP TABLE matches_entity');
    }
}
