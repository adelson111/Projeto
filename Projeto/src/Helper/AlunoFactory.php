<?php


namespace App\Helper;


use App\Entity\Aluno;
use App\Entity\Usuario;

class AlunoFactory implements EntityFactory
{
    public function create(string $json):Aluno
    {
        $content = json_decode($json);
        $usuario = new Usuario();
        $usuario->setLogin($content->matricula)
            ->setPassword($content->senha)
            ->setTipo("Aluno");
        $aluno = new Aluno();
        $aluno->
        setNome($content->nome)
        ->setCpf($content->cpf)
        ->setMatricula($content->matricula)
        ->setCurso($content->curso)
        ->setFoto($content->foto)
        ->setSenha($content->senha)
        ->setCurriculoLatte($content->curriculoLatte)
        ->setUsuario($usuario);
        return $aluno;
    }
}