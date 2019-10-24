<?php


namespace App\Helper;


use App\Entity\Projeto;
use App\Entity\Visitante;

class VisitanteFactory implements EntityFactory
{

    public function create(string $json):Visitante
    {
        $content = json_decode($json);
        $visitante = new Visitante();
        $visitante->setNome($content->nome)
        ->setEmail($content->email)
        ->setSenha($content->senha)
        ->setFoto($content->foto);
        return $visitante;
    }
}