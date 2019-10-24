<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191023001304 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE professor ADD usuario_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE professor ADD CONSTRAINT FK_790DD7E3DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_790DD7E3DB38439E ON professor (usuario_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE professor DROP FOREIGN KEY FK_790DD7E3DB38439E');
        $this->addSql('DROP INDEX UNIQ_790DD7E3DB38439E ON professor');
        $this->addSql('ALTER TABLE professor DROP usuario_id');
    }
}
