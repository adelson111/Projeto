<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191017004346 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE aluno ADD usuario_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE aluno ADD CONSTRAINT FK_67C97100DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_67C97100DB38439E ON aluno (usuario_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE aluno DROP FOREIGN KEY FK_67C97100DB38439E');
        $this->addSql('DROP INDEX UNIQ_67C97100DB38439E ON aluno');
        $this->addSql('ALTER TABLE aluno DROP usuario_id');
    }
}
