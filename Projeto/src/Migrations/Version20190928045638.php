<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190928045638 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE projeto_professor (projeto_id INTEGER NOT NULL, professor_id INTEGER NOT NULL, PRIMARY KEY(projeto_id, professor_id))');
        $this->addSql('CREATE INDEX IDX_9D66D5C843B58490 ON projeto_professor (projeto_id)');
        $this->addSql('CREATE INDEX IDX_9D66D5C87D2D84D5 ON projeto_professor (professor_id)');
        $this->addSql('CREATE TABLE projeto_aluno (projeto_id INTEGER NOT NULL, aluno_id INTEGER NOT NULL, PRIMARY KEY(projeto_id, aluno_id))');
        $this->addSql('CREATE INDEX IDX_673B889843B58490 ON projeto_aluno (projeto_id)');
        $this->addSql('CREATE INDEX IDX_673B8898B2DDF7F4 ON projeto_aluno (aluno_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__relevancia AS SELECT id, relevancia FROM relevancia');
        $this->addSql('DROP TABLE relevancia');
        $this->addSql('CREATE TABLE relevancia (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, projeto_id INTEGER DEFAULT NULL, relevancia INTEGER NOT NULL, CONSTRAINT FK_3FC3EBC643B58490 FOREIGN KEY (projeto_id) REFERENCES projeto (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO relevancia (id, relevancia) SELECT id, relevancia FROM __temp__relevancia');
        $this->addSql('DROP TABLE __temp__relevancia');
        $this->addSql('CREATE INDEX IDX_3FC3EBC643B58490 ON relevancia (projeto_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__sugestao AS SELECT id, sugestao FROM sugestao');
        $this->addSql('DROP TABLE sugestao');
        $this->addSql('CREATE TABLE sugestao (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, projeto_id INTEGER DEFAULT NULL, sugestao CLOB NOT NULL COLLATE BINARY, CONSTRAINT FK_3617989843B58490 FOREIGN KEY (projeto_id) REFERENCES projeto (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO sugestao (id, sugestao) SELECT id, sugestao FROM __temp__sugestao');
        $this->addSql('DROP TABLE __temp__sugestao');
        $this->addSql('CREATE INDEX IDX_3617989843B58490 ON sugestao (projeto_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE projeto_professor');
        $this->addSql('DROP TABLE projeto_aluno');
        $this->addSql('DROP INDEX IDX_3FC3EBC643B58490');
        $this->addSql('CREATE TEMPORARY TABLE __temp__relevancia AS SELECT id, relevancia FROM relevancia');
        $this->addSql('DROP TABLE relevancia');
        $this->addSql('CREATE TABLE relevancia (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, relevancia INTEGER NOT NULL)');
        $this->addSql('INSERT INTO relevancia (id, relevancia) SELECT id, relevancia FROM __temp__relevancia');
        $this->addSql('DROP TABLE __temp__relevancia');
        $this->addSql('DROP INDEX IDX_3617989843B58490');
        $this->addSql('CREATE TEMPORARY TABLE __temp__sugestao AS SELECT id, sugestao FROM sugestao');
        $this->addSql('DROP TABLE sugestao');
        $this->addSql('CREATE TABLE sugestao (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, sugestao CLOB NOT NULL)');
        $this->addSql('INSERT INTO sugestao (id, sugestao) SELECT id, sugestao FROM __temp__sugestao');
        $this->addSql('DROP TABLE __temp__sugestao');
    }
}
