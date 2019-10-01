<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RelevanciaRepository")
 */
class Relevancia implements \JsonSerializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $relevancia;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Projeto", inversedBy="relevancias")
     */
    private $projeto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRelevancia(): ?int
    {
        return $this->relevancia;
    }

    public function setRelevancia(int $relevancia): self
    {
        $this->relevancia = $relevancia;

        return $this;
    }

    public function getProjeto(): ?Projeto
    {
        return $this->projeto;
    }

    public function setProjeto(?Projeto $projeto): self
    {
        $this->projeto = $projeto;

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
        return ['id'=>$this->getId(),'relevancia'=>$this->getRelevancia(), 'projeto'=>$this->getProjeto()];
    }
}
