<?php


namespace App\Helper;


use App\Entity\Projeto;
use App\Entity\Professor;
use App\Repository\ProfessorRepository;
use App\Repository\AlunoRepository;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
class ProjetoFactory  implements EntityFactory
{
    private $professorRepository;

    public function __construct(ProfessorRepository $professorRepository, AlunoRepository $alunoRepository)
    {
        $this->professorRepository =$professorRepository;
        $this->alunoRepository =$alunoRepository;
    }

    public function create(string $json):Projeto
    {

        $content = json_decode($json);
        $projeto = new Projeto();
        $professor = $this->professorRepository->find($content->id_professor);
        $aluno = $this->alunoRepository->find($content->id_aluno);
        $projeto->setNome($content->nome)
        ->setFinalizado($content->finalizado)
        ->setAcompanhamentoAvaliacaoProjeto($content->acompanhamentoAvaliacaoProjeto)
        ->setAreaConhecimento($content->areaConhecimento)
        ->setCampus($content->campus)
        ->setDataInicio( new \DateTime($content->dataInicio))
        ->setDataTermino(new \DateTime($content->dataTermino))
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
        ->setArquivos($content->arquivos)
        ->addProfessor($professor)
        ->addAluno($aluno);
        return $projeto;
    }
}


