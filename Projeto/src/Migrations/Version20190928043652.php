<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190928043652 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE aluno (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, cpf VARCHAR(11) NOT NULL, matricula VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, foto VARCHAR(255) NOT NULL, curso VARCHAR(255) NOT NULL, curriculo_latte VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE professor (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, cpf VARCHAR(11) NOT NULL, matricula VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, foto VARCHAR(255) NOT NULL, area_atuacao VARCHAR(255) NOT NULL, curriculo_latte VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE projeto (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, tipo VARCHAR(255) NOT NULL, finalizado BOOLEAN NOT NULL, campus VARCHAR(255) NOT NULL, data_inicio DATE NOT NULL, data_termino DATE NOT NULL, area_conhecimento VARCHAR(255) NOT NULL, resumo CLOB NOT NULL, introducao CLOB NOT NULL, justificativa CLOB NOT NULL, fundamentacao_teorica CLOB NOT NULL, objetivo_geral CLOB NOT NULL, metodologia_execucao_projeto CLOB NOT NULL, acompanhamento_avaliacao_projeto CLOB NOT NULL, resultado_esperado CLOB NOT NULL, referencia CLOB NOT NULL, resultado_alcancado CLOB NOT NULL, resultado_disseminacao_esperado CLOB NOT NULL, observacao CLOB NOT NULL, arquivos CLOB NOT NULL --(DC2Type:array)
        )');
        $this->addSql('CREATE TABLE relevancia (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, relevancia INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE sugestao (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, sugestao CLOB NOT NULL)');
        $this->addSql('CREATE TABLE visitante (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, foto VARCHAR(255) NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE aluno');
        $this->addSql('DROP TABLE professor');
        $this->addSql('DROP TABLE projeto');
        $this->addSql('DROP TABLE relevancia');
        $this->addSql('DROP TABLE sugestao');
        $this->addSql('DROP TABLE visitante');
    }
}
