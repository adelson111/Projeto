<?php


namespace App\Controller;

use App\Entity\Aluno;
use App\Entity\Projeto;
use App\Helper\ProjetoFactory;
use App\Helper\HandleRequest;
use App\Repository\ProjetoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class ControllerProjeto extends GenericController
{
    public function __construct(
        ProjetoRepository $projetoRepository,
        EntityManagerInterface $entityManager,
        ProjetoFactory $projetoFactory,
        HandleRequest $handleRequest)
    {
        parent::__construct($projetoRepository, $entityManager, $projetoFactory, $handleRequest);
    }


    public function updateEntity($entity, $entityUpdate)
    {

    }


    public function detalheProjeto(int $id): Response{

        $entity = $this->objectRepository->find($id);
        return new JsonResponse($entity);

    }

    public function vincularAlunoEntity(int $id, Request $request):Response
    {

        $content = json_decode($request->getContent());

        $repositoryProjeto = $this->getDoctrine()->getRepository(Projeto::class);
        $projeto = $repositoryProjeto->find($id);

        $repositoryAluno = $this->getDoctrine()->getRepository(Aluno::class);
        $aluno = $repositoryAluno->find($content->id_aluno);
        $projetoUpdate = new Projeto();

        $projeto->addAluno = $projetoUpdate->addAluno($aluno);
        $this->entityManager->flush();
        return new JsonResponse($projeto);

    }
}