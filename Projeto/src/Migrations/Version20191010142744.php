<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191010142744 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE sugestao_visitante (sugestao_id INT NOT NULL, visitante_id INT NOT NULL, INDEX IDX_B005B95FAF0AA99B (sugestao_id), INDEX IDX_B005B95FD80AA8AF (visitante_id), PRIMARY KEY(sugestao_id, visitante_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sugestao_visitante ADD CONSTRAINT FK_B005B95FAF0AA99B FOREIGN KEY (sugestao_id) REFERENCES sugestao (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sugestao_visitante ADD CONSTRAINT FK_B005B95FD80AA8AF FOREIGN KEY (visitante_id) REFERENCES visitante (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE sugestao_visitante');
    }
}
