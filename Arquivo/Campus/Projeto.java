/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package model;

import java.util.ArrayList;
import java.util.Date;

/**
 *
 * @author adelson
 */
public class Projeto {
    
    // Dados do projeto
    private String nome;
    private String tipo;
    private boolean finalizado;
    private String campus;
    private Date dataInicio;
    private Date dataTermino;
    private String areaConhecimento;
    
    // Artigo - Projeto Pesquuisa - Projeto Extensão
    private String resumo;
    private String indroducao;
    private String justificativa;
    private String fundamentacaoTeorica;
    private String objetivoGeral;
    private String metodologiaExecucaoProjeto;
    private String acompanhamentoAvaliacaoProjeto;
    private String resultadoEsperado;
    private String referancia;
    
    // Equipe
    private ArrayList<Professor> professores; // ManyToMany
    private ArrayList<Aluno> alunos; // ManyToMany
    
    // Anexo
    private ArrayList<Object> arquivos;
    
    // Cunclusão
    private String resultadoAlcancado;
    private String resultadoDisseminacaoEsperado;
    private String observacao;
    
    // Extra - Comunidade
    private ArrayList<Relevancia> relevancias; // OnyToMany
    private ArrayList<Sugestao> sugestoes; // OnyToMany
    
}
