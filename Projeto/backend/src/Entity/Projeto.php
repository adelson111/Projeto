<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Query;
use PhpParser\Node\Expr\Cast\Object_;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjetoRepository")
 */
class Projeto implements \JsonSerializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tipo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $finalizado;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $campus;

    /**
     * @ORM\Column(type="date")
     */
    private $dataInicio;

    /**
     * @ORM\Column(type="date")
     */
    private $dataTermino;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $areaConhecimento;

    /**
     * @ORM\Column(type="text")
     */
    private $resumo;

    /**
     * @ORM\Column(type="text")
     */
    private $introducao;

    /**
     * @ORM\Column(type="text")
     */
    private $justificativa;

    /**
     * @ORM\Column(type="text")
     */
    private $fundamentacaoTeorica;

    /**
     * @ORM\Column(type="text")
     */
    private $objetivoGeral;

    /**
     * @ORM\Column(type="text")
     */
    private $metodologiaExecucaoProjeto;

    /**
     * @ORM\Column(type="text")
     */
    private $acompanhamentoAvaliacaoProjeto;

    /**
     * @ORM\Column(type="text")
     */
    private $resultadoEsperado;

    /**
     * @ORM\Column(type="text")
     */
    private $referencia;

    /**
     * @ORM\Column(type="text")
     */
    private $resultadoAlcancado;

    /**
     * @ORM\Column(type="text")
     */
    private $resultadoDisseminacaoEsperado;

    /**
     * @ORM\Column(type="text")
     */
    private $observacao;

    /**
     * @ORM\Column(type="array")
     */
    private $arquivos = [];

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Professor", inversedBy="projetos")
     */
    private $professor;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Aluno", inversedBy="projetos")
     */
    private $alunos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Relevancia", mappedBy="projeto")
     */
    private $relevancias;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Sugestao", mappedBy="projeto")
     */
    private $sugestoes;

    public function __construct()
    {
        $this->professor = new ArrayCollection();
        $this->alunos = new ArrayCollection();
        $this->relevancias = new ArrayCollection();
        $this->sugestoes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->Nome;
    }

    public function setNome(string $Nome): self
    {
        $this->Nome = $Nome;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getFinalizado(): ?bool
    {
        return $this->finalizado;
    }

    public function setFinalizado(bool $finalizado): self
    {
        $this->finalizado = $finalizado;

        return $this;
    }

    public function getCampus(): ?string
    {
        return $this->campus;
    }

    public function setCampus(string $campus): self
    {
        $this->campus = $campus;

        return $this;
    }

    public function getDataInicio(): ?\DateTimeInterface
    {
        return $this->dataInicio;
    }

    public function setDataInicio(\DateTimeInterface $dataInicio): self
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    public function getDataTermino(): ?\DateTimeInterface
    {
        return $this->dataTermino;
    }

    public function setDataTermino(\DateTimeInterface $dataTermino): self
    {
        $this->dataTermino = $dataTermino;

        return $this;
    }

    public function getAreaConhecimento(): ?string
    {
        return $this->areaConhecimento;
    }

    public function setAreaConhecimento(string $areaConhecimento): self
    {
        $this->areaConhecimento = $areaConhecimento;

        return $this;
    }

    public function getResumo(): ?string
    {
        return $this->resumo;
    }

    public function setResumo(string $resumo): self
    {
        $this->resumo = $resumo;

        return $this;
    }

    public function getIntroducao(): ?string
    {
        return $this->introducao;
    }

    public function setIntroducao(string $introducao): self
    {
        $this->introducao = $introducao;

        return $this;
    }

    public function getJustificativa(): ?string
    {
        return $this->justificativa;
    }

    public function setJustificativa(string $justificativa): self
    {
        $this->justificativa = $justificativa;

        return $this;
    }

    public function getFundamentacaoTeorica(): ?string
    {
        return $this->fundamentacaoTeorica;
    }

    public function setFundamentacaoTeorica(string $fundamentacaoTeorica): self
    {
        $this->fundamentacaoTeorica = $fundamentacaoTeorica;

        return $this;
    }

    public function getObjetivoGeral(): ?string
    {
        return $this->objetivoGeral;
    }

    public function setObjetivoGeral(string $objetivoGeral): self
    {
        $this->objetivoGeral = $objetivoGeral;

        return $this;
    }

    public function getMetodologiaExecucaoProjeto(): ?string
    {
        return $this->metodologiaExecucaoProjeto;
    }

    public function setMetodologiaExecucaoProjeto(string $metodologiaExecucaoProjeto): self
    {
        $this->metodologiaExecucaoProjeto = $metodologiaExecucaoProjeto;

        return $this;
    }

    public function getAcompanhamentoAvaliacaoProjeto(): ?string
    {
        return $this->acompanhamentoAvaliacaoProjeto;
    }

    public function setAcompanhamentoAvaliacaoProjeto(string $acompanhamentoAvaliacaoProjeto): self
    {
        $this->acompanhamentoAvaliacaoProjeto = $acompanhamentoAvaliacaoProjeto;

        return $this;
    }

    public function getResultadoEsperado(): ?string
    {
        return $this->resultadoEsperado;
    }

    public function setResultadoEsperado(string $resultadoEsperado): self
    {
        $this->resultadoEsperado = $resultadoEsperado;

        return $this;
    }

    public function getReferencia(): ?string
    {
        return $this->referencia;
    }

    public function setReferencia(string $referencia): self
    {
        $this->referencia = $referencia;

        return $this;
    }

    public function getResultadoAlcancado(): ?string
    {
        return $this->resultadoAlcancado;
    }

    public function setResultadoAlcancado(string $resultadoAlcancado): self
    {
        $this->resultadoAlcancado = $resultadoAlcancado;

        return $this;
    }

    public function getResultadoDisseminacaoEsperado(): ?string
    {
        return $this->resultadoDisseminacaoEsperado;
    }

    public function setResultadoDisseminacaoEsperado(string $resultadoDisseminacaoEsperado): self
    {
        $this->resultadoDisseminacaoEsperado = $resultadoDisseminacaoEsperado;

        return $this;
    }

    public function getObservacao(): ?string
    {
        return $this->observacao;
    }

    public function setObservacao(string $observacao): self
    {
        $this->observacao = $observacao;

        return $this;
    }

    public function getArquivos(): ?array
    {
        return $this->arquivos;
    }

    public function setArquivos(array $arquivos): self
    {
        $this->arquivos = $arquivos;

        return $this;
    }

    /**
     * @return Collection|Professor[]
     */
    public function getProfessor(): Collection
    {
        return $this->professor;
    }

    public function addProfessor(Professor $professor): self
    {
        if (!$this->professor->contains($professor)) {
            $this->professor[] = $professor;
        }

        return $this;
    }

    public function removeProfessor(Professor $professor): self
    {
        if ($this->professor->contains($professor)) {
            $this->professor->removeElement($professor);
        }

        return $this;
    }

    /**
     * @return Collection|Aluno[]
     */
    public function getAlunos(): Collection
    {
        return $this->alunos;
    }

    public function addAluno(Aluno $aluno): self
    {
        if (!$this->alunos->contains($aluno)) {
            $this->alunos[] = $aluno;
        }

        return $this;
    }

    public function removeAluno(Aluno $aluno): self
    {
        if ($this->alunos->contains($aluno)) {
            $this->alunos->removeElement($aluno);
        }

        return $this;
    }

    /**
     * @return Collection|Relevancia[]
     */
    public function getRelevancias(): Collection
    {
        return $this->relevancias;
    }

    public function addRelevancia(Relevancia $relevancia): self
    {
        if (!$this->relevancias->contains($relevancia)) {
            $this->relevancias[] = $relevancia;
            $relevancia->setProjeto($this);
        }

        return $this;
    }

    public function removeRelevancia(Relevancia $relevancia): self
    {
        if ($this->relevancias->contains($relevancia)) {
            $this->relevancias->removeElement($relevancia);
            // set the owning side to null (unless already changed)
            if ($relevancia->getProjeto() === $this) {
                $relevancia->setProjeto(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Sugestao[]
     */
    public function getSugestoes(): Collection
    {
        return $this->sugestoes;
    }

    public function addSugesto(Sugestao $sugesto): self
    {
        if (!$this->sugestoes->contains($sugesto)) {
            $this->sugestoes[] = $sugesto;
            $sugesto->setProjeto($this);
        }

        return $this;
    }

    public function removeSugesto(Sugestao $sugesto): self
    {
        if ($this->sugestoes->contains($sugesto)) {
            $this->sugestoes->removeElement($sugesto);
            // set the owning side to null (unless already changed)
            if ($sugesto->getProjeto() === $this) {
                $sugesto->setProjeto(null);
            }
        }

        return $this;
    }


    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {


        return [
            'id'=>$this->getId(),
            'nome'=>$this->getNome(),
            'tipo'=>$this->getTipo(),
            'finalizado'=>$this->getFinalizado(),
            'campus'=>$this->getCampus(),
            'dataInicio'=>$this->getDataInicio(),
            'dataTermino'=>$this->getDataTermino(),
            'areaConhecimento'=>$this->getAreaConhecimento(),
            'resumo'=>$this->getResumo(),
            'introducao'=>$this->getIntroducao(),
            'justificativa'=>$this->getJustificativa(),
            'fundamentacaoTeorica'=>$this->getFundamentacaoTeorica(),
            'objetivoGeral'=>$this->getObjetivoGeral(),
            'metodologiaExecucaoProjeto'=>$this->getMetodologiaExecucaoProjeto(),
            'acompanhamentoAvaliacaoProjeto'=>$this->getAcompanhamentoAvaliacaoProjeto(),
            'resultadoEsperado'=>$this->getResultadoEsperado(),
            'referancia'=>$this->getReferencia(),
            'professor'=>$this->getProfessor()->getValues(),
            'alunos'=>$this->getAlunos()->getValues(),
            'arquivos'=>$this->getArquivos(),
            'resultadoAlcancado'=>$this->getResultadoAlcancado(),
            'resultadoDisseminacaoEsperado'=>$this->getResultadoDisseminacaoEsperado(),
            'observacao'=>$this->getObservacao(),
            'relevancias'=>$this->getRelevancias(),
            'sugestao'=>$this->getSugestoes()->getValues() or null];
    }
}
