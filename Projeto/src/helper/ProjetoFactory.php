<?php


namespace App\helper;


use App\Entity\Projeto;

class ProjetoFactory  implements EntityFactory
{
    public function create(string $json):Projeto
    {
        $content = json_decode($json);
        $projeto = new Projeto();
        $projeto->setNome($content->nome)
        ->setFinalizado($content->finalizado)
        ->setAcompanhamentoAvaliacaoProjeto($content->acompanhamentoAvaliacaoProjeto)
        ->setAreaConhecimento($content->areaConhecimento)
        ->setCampus($content->campus)
        ->setDataInicio($content->dataInicio)
        ->setDataTermino($content->dataTermino)
        ->setFundamentacaoTeorica($content->fundamentacaoTeorica)
        ->setIntroducao($content->introducao)
        ->setJustificativa($content->justificativa)
        ->setMetodologiaExecucaoProjeto($content->metodologiaExecucaoProjeto)
        ->setObjetivoGeral($content->objetivoGeral)
        ->setObservacao($content->observacao)
        ->setReferencia($content->referencia)
        ->setResultadoEsperado($content->resultadoEsperado)
        ->setResumo($content->resumo)
        ->setResultadoAlcancado($content->resultadoAlcancado)
        ->setTipo($content->tipo)
        ->setResultadoDisseminacaoEsperado($content->resultadoDisseminacaoEsperado)
        ->setArquivos($content->arquivos);
        return $projeto;
    }
}


