<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191005005825 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE sugestao (id INT AUTO_INCREMENT NOT NULL, projeto_id INT DEFAULT NULL, sugestao LONGTEXT NOT NULL, INDEX IDX_3617989843B58490 (projeto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visitante (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, foto VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE aluno (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, cpf VARCHAR(11) NOT NULL, matricula VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, foto VARCHAR(255) NOT NULL, curso VARCHAR(255) NOT NULL, curriculo_latte VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE professor (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, cpf VARCHAR(11) NOT NULL, matricula VARCHAR(255) NOT NULL, senha VARCHAR(255) NOT NULL, foto VARCHAR(255) NOT NULL, area_atuacao VARCHAR(255) NOT NULL, curriculo_latte VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE relevancia (id INT AUTO_INCREMENT NOT NULL, projeto_id INT DEFAULT NULL, relevancia INT NOT NULL, INDEX IDX_3FC3EBC643B58490 (projeto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projeto (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, tipo VARCHAR(255) NOT NULL, finalizado TINYINT(1) NOT NULL, campus VARCHAR(255) NOT NULL, data_inicio DATE NOT NULL, data_termino DATE NOT NULL, area_conhecimento VARCHAR(255) NOT NULL, resumo LONGTEXT NOT NULL, introducao LONGTEXT NOT NULL, justificativa LONGTEXT NOT NULL, fundamentacao_teorica LONGTEXT NOT NULL, objetivo_geral LONGTEXT NOT NULL, metodologia_execucao_projeto LONGTEXT NOT NULL, acompanhamento_avaliacao_projeto LONGTEXT NOT NULL, resultado_esperado LONGTEXT NOT NULL, referencia LONGTEXT NOT NULL, resultado_alcancado LONGTEXT NOT NULL, resultado_disseminacao_esperado LONGTEXT NOT NULL, observacao LONGTEXT NOT NULL, arquivos LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projeto_professor (projeto_id INT NOT NULL, professor_id INT NOT NULL, INDEX IDX_9D66D5C843B58490 (projeto_id), INDEX IDX_9D66D5C87D2D84D5 (professor_id), PRIMARY KEY(projeto_id, professor_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projeto_aluno (projeto_id INT NOT NULL, aluno_id INT NOT NULL, INDEX IDX_673B889843B58490 (projeto_id), INDEX IDX_673B8898B2DDF7F4 (aluno_id), PRIMARY KEY(projeto_id, aluno_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sugestao ADD CONSTRAINT FK_3617989843B58490 FOREIGN KEY (projeto_id) REFERENCES projeto (id)');
        $this->addSql('ALTER TABLE relevancia ADD CONSTRAINT FK_3FC3EBC643B58490 FOREIGN KEY (projeto_id) REFERENCES projeto (id)');
        $this->addSql('ALTER TABLE projeto_professor ADD CONSTRAINT FK_9D66D5C843B58490 FOREIGN KEY (projeto_id) REFERENCES projeto (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projeto_professor ADD CONSTRAINT FK_9D66D5C87D2D84D5 FOREIGN KEY (professor_id) REFERENCES professor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projeto_aluno ADD CONSTRAINT FK_673B889843B58490 FOREIGN KEY (projeto_id) REFERENCES projeto (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projeto_aluno ADD CONSTRAINT FK_673B8898B2DDF7F4 FOREIGN KEY (aluno_id) REFERENCES aluno (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE projeto_aluno DROP FOREIGN KEY FK_673B8898B2DDF7F4');
        $this->addSql('ALTER TABLE projeto_professor DROP FOREIGN KEY FK_9D66D5C87D2D84D5');
        $this->addSql('ALTER TABLE sugestao DROP FOREIGN KEY FK_3617989843B58490');
        $this->addSql('ALTER TABLE relevancia DROP FOREIGN KEY FK_3FC3EBC643B58490');
        $this->addSql('ALTER TABLE projeto_professor DROP FOREIGN KEY FK_9D66D5C843B58490');
        $this->addSql('ALTER TABLE projeto_aluno DROP FOREIGN KEY FK_673B889843B58490');
        $this->addSql('DROP TABLE sugestao');
        $this->addSql('DROP TABLE visitante');
        $this->addSql('DROP TABLE aluno');
        $this->addSql('DROP TABLE professor');
        $this->addSql('DROP TABLE relevancia');
        $this->addSql('DROP TABLE projeto');
        $this->addSql('DROP TABLE projeto_professor');
        $this->addSql('DROP TABLE projeto_aluno');
    }
}
