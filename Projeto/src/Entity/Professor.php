<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProfessorRepository")
 */
class Professor implements \JsonSerializable
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
    private $nome;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $cpf;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricula;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $senha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $foto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $areaAtuacao;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $curriculoLatte;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Projeto", mappedBy="professor")
     */
    private $projetos;

    public function __construct()
    {
        $this->projetos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getMatricula(): ?string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getSenha(): ?string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getAreaAtuacao(): ?string
    {
        return $this->areaAtuacao;
    }

    public function setAreaAtuacao(string $areaAtuacao): self
    {
        $this->areaAtuacao = $areaAtuacao;

        return $this;
    }

    public function getCurriculoLatte(): ?string
    {
        return $this->curriculoLatte;
    }

    public function setCurriculoLatte(string $curriculoLatte): self
    {
        $this->curriculoLatte = $curriculoLatte;

        return $this;
    }

    /**
     * @return Collection|Projeto[]
     */
    public function getProjetos(): Collection
    {
        return $this->projetos;
    }

    public function addProjeto(Projeto $projeto): self
    {
        if (!$this->projetos->contains($projeto)) {
            $this->projetos[] = $projeto;
            $projeto->addProfessor($this);
        }

        return $this;
    }

    public function removeProjeto(Projeto $projeto): self
    {
        if ($this->projetos->contains($projeto)) {
            $this->projetos->removeElement($projeto);
            $projeto->removeProfessor($this);
        }

        return $this;
    }
    public function jsonSerialize()
    {
        return ['id'=>$this->getId(),'nome'=>$this->getNome(), 'cpf'=>$this->getCpf(), 'matricula'=>$this->getMatricula(),
            'areaAtuacao'=>$this->getAreaAtuacao(), 'curriculoLatte'=>$this->getCurriculoLatte()];
    }
}
