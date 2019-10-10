<?php


namespace App\Helper;


use App\Entity\Projeto;
use App\Entity\Sugestao;
use App\Repository\ProjetoRepository;

class SugestaoFactory implements EntityFactory
{
    private $projeto;

    public function __construct(ProjetoRepository $projeto)
    {
        $this->projeto = $projeto;
    }

    public function create(string $json):Sugestao
    {
        $content = json_decode($json);
        $projeto = $this->projeto->find($content->id_projeto);
        $sugestao = new Sugestao();
        $sugestao->setProjeto($projeto);
        $sugestao->setSugestao($content->sugestao);
        return $sugestao;
    }
}