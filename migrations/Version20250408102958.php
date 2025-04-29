<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250408102958 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE Archivos ADD id_padre_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Archivos ADD CONSTRAINT FK_E1FB66E531E700CD FOREIGN KEY (id_padre_id) REFERENCES `Archivos` (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_E1FB66E531E700CD ON Archivos (id_padre_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE `Archivos` DROP FOREIGN KEY FK_E1FB66E531E700CD
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_E1FB66E531E700CD ON `Archivos`
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Archivos` DROP id_padre_id
        SQL);
    }
}
