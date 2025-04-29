<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250404111211 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Archivos DROP FOREIGN KEY Archivos_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Archivos DROP FOREIGN KEY fk_archivos_padre
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX user_id ON Archivos
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX fk_archivos_padre ON Archivos
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Archivos ADD filetype VARCHAR(255) NOT NULL, ADD filehash VARCHAR(255) NOT NULL, DROP id_padre, CHANGE filepath filepath VARCHAR(255) NOT NULL, CHANGE upload_date upload_date DATETIME NOT NULL, CHANGE user_id user_id_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Archivos ADD CONSTRAINT FK_E1FB66E59D86650F FOREIGN KEY (user_id_id) REFERENCES `Usuarios` (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_E1FB66E59D86650F ON Archivos (user_id_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Historial DROP FOREIGN KEY Historial_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Historial DROP FOREIGN KEY Historial_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX user_id ON Historial
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX file_id ON Historial
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Historial ADD user_id_id INT NOT NULL, ADD file_id_id INT NOT NULL, DROP user_id, DROP file_id, CHANGE action action VARCHAR(255) NOT NULL, CHANGE action_date action_date DATETIME NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Historial ADD CONSTRAINT FK_A46484F19D86650F FOREIGN KEY (user_id_id) REFERENCES `Usuarios` (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Historial ADD CONSTRAINT FK_A46484F1D5C72E60 FOREIGN KEY (file_id_id) REFERENCES `Archivos` (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A46484F19D86650F ON Historial (user_id_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A46484F1D5C72E60 ON Historial (file_id_id)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX username ON Usuarios
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX email ON Usuarios
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE Usuarios CHANGE role role VARCHAR(255) NOT NULL, CHANGE fecha_registro fecha_registro DATE NOT NULL, CHANGE avatar_path avatar_path LONGTEXT DEFAULT NULL, CHANGE home_path home_path VARCHAR(255) DEFAULT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Usuarios` CHANGE role role VARCHAR(50) DEFAULT 'user' NOT NULL, CHANGE fecha_registro fecha_registro DATE DEFAULT 'curdate()' NOT NULL, CHANGE avatar_path avatar_path VARCHAR(255) DEFAULT NULL, CHANGE home_path home_path VARCHAR(255) DEFAULT '/home/default/'
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX username ON `Usuarios` (username)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX email ON `Usuarios` (email)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Archivos` DROP FOREIGN KEY FK_E1FB66E59D86650F
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_E1FB66E59D86650F ON `Archivos`
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Archivos` ADD id_padre INT DEFAULT NULL, DROP filetype, DROP filehash, CHANGE filepath filepath TEXT NOT NULL, CHANGE upload_date upload_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE user_id_id user_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Archivos` ADD CONSTRAINT Archivos_ibfk_1 FOREIGN KEY (user_id) REFERENCES Usuarios (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Archivos` ADD CONSTRAINT fk_archivos_padre FOREIGN KEY (id_padre) REFERENCES Archivos (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX user_id ON `Archivos` (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX fk_archivos_padre ON `Archivos` (id_padre)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Historial` DROP FOREIGN KEY FK_A46484F19D86650F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Historial` DROP FOREIGN KEY FK_A46484F1D5C72E60
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_A46484F19D86650F ON `Historial`
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_A46484F1D5C72E60 ON `Historial`
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Historial` ADD user_id INT NOT NULL, ADD file_id INT NOT NULL, DROP user_id_id, DROP file_id_id, CHANGE action action VARCHAR(50) NOT NULL, CHANGE action_date action_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Historial` ADD CONSTRAINT Historial_ibfk_1 FOREIGN KEY (user_id) REFERENCES Usuarios (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `Historial` ADD CONSTRAINT Historial_ibfk_2 FOREIGN KEY (file_id) REFERENCES Archivos (id) ON UPDATE NO ACTION ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX user_id ON `Historial` (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX file_id ON `Historial` (file_id)
        SQL);
    }
}
