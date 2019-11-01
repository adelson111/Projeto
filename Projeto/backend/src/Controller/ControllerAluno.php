<?php

namespace App\Controller;

use App\Entity\Aluno;
use App\Entity\Usuario;
use App\Helper\AlunoFactory;
use App\Helper\HandleRequest;
use App\Repository\AlunoRepository;
use App\Repository\UsuarioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ControllerAluno extends GenericController
{
    private $usuarioRepository;
    private $encoder1;
    public function __construct(
        AlunoRepository $alunoRepository,
        EntityManagerInterface $entityManager,
        AlunoFactory $alunoFactory,
        HandleRequest $handleRequest,
        UsuarioRepository $usuarioRepository,
        UserPasswordEncoderInterface $encoder)
    {
        parent::__construct($alunoRepository, $entityManager, $alunoFactory, $handleRequest);
        $this->usuarioRepository = $usuarioRepository;
        $this->encoder1 = $encoder;
    }

    public function createAluno(Request $request): Response
    {
        $content = json_decode($request->getContent());

        if($this->usuarioRepository->findByEmail($content->email)) {
            return new JsonResponse(['error'=>'Já existe um usuário com esse e-mail'], '401');
        }

        if(strlen($content->senha)<7){
            return new JsonResponse(['error'=>'Senha com menos de 8 caracteres'],'401');
        }


        $aluno = new Aluno();
        $usuario = new Usuario();
        $usuario->setEmail($content->email)->setPassword($this->encoder1->encodePassword($usuario, $content->senha));
        $aluno->
        setNome($content->nome)
            ->setCpf($content->cpf)
            ->setMatricula($content->matricula)
            ->setCurso($content->curso)
            ->setFoto($content->foto)
            ->setSenha($content->senha)
            ->setCurriculoLatte($content->curriculoLatte)
            ->setUsuario($usuario);
        $this->entityManager->persist($aluno);
        $this->entityManager->flush();
        return new JsonResponse($aluno);
    }


    public function updateAluno(int $id, Request $request): Response
    {
        $content = json_decode($request->getContent());
        $aluno =$this->objectRepository->find($id);
        $aluno->
        setNome($content->nome)
            ->setCpf($content->cpf)
            ->setMatricula($content->matricula)
            ->setCurso($content->curso)
            ->setFoto($content->foto)
            ->setCurriculoLatte($content->curriculoLatte);
        $this->entityManager->flush();
        return new JsonResponse($aluno);
    }

    public function buscarTodos(){

        $listaAluno = $this->objectRepository->findAll();
        return new JsonResponse($listaAluno);
    }


    public function updateEntity($entity, $entityUpdate)
    {
        $entity->setNome($entityUpdate->setNome())
            ->setCurso($entityUpdate->setCurso());
    }
}