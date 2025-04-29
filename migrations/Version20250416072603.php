<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250416072603 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE repositorios (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, version INT NOT NULL, fecha_creacion DATETIME NOT NULL, INDEX IDX_FDCDD7CB9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE repositorios ADD CONSTRAINT FK_FDCDD7CB9D86650F FOREIGN KEY (user_id_id) REFERENCES `Usuarios` (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Archivos DROP FOREIGN KEY FK_E1FB66E531E700CD
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX unique_path_hash ON Archivos
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Archivos ADD repo_id_id INT NOT NULL, ADD repo_version INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Archivos ADD CONSTRAINT FK_E1FB66E592D287CC FOREIGN KEY (repo_id_id) REFERENCES repositorios (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Archivos ADD CONSTRAINT FK_E1FB66E531E700CD FOREIGN KEY (id_padre_id) REFERENCES `Archivos` (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_E1FB66E592D287CC ON Archivos (repo_id_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE `Archivos` DROP FOREIGN KEY FK_E1FB66E592D287CC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE repositorios DROP FOREIGN KEY FK_FDCDD7CB9D86650F
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE repositorios
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Archivos` DROP FOREIGN KEY FK_E1FB66E531E700CD
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_E1FB66E592D287CC ON `Archivos`
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Archivos` DROP repo_id_id, DROP repo_version
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Archivos` ADD CONSTRAINT FK_E1FB66E531E700CD FOREIGN KEY (id_padre_id) REFERENCES Archivos (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX unique_path_hash ON `Archivos` (filepath, filehash)
        SQL);
    }
}
