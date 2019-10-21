<?php


namespace App\Helper;


use App\Entity\Aluno;
use App\Entity\Usuario;

class AlunoFactory implements EntityFactory
{
    public function create(string $json):Aluno
    {
        $content = json_decode($json);
        $aluno = new Aluno();
        $aluno->
        setNome($content->nome)
        ->setCpf($content->cpf)
        ->setMatricula($content->matricula)
        ->setCurso($content->curso)
        ->setFoto($content->foto)
        ->setSenha($content->senha)
        ->setCurriculoLatte($content->curriculoLatte);
        return $aluno;
    }
}