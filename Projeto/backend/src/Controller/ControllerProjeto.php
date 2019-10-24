<?php


namespace App\Controller;

use App\Entity\Aluno;
use App\Entity\Professor;
use App\Entity\Projeto;
use App\Helper\ProjetoFactory;
use App\Helper\HandleRequest;
use App\Repository\ProjetoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use function Symfony\Component\DependencyInjection\Loader\Configurator\expr;


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

        $emP = $this->getDoctrine()->getManager();
        $projeto = $emP->getRepository(Projeto::class)->find($id);

        $em = $this->getDoctrine()->getManager();
        $aluno = $em->getRepository(Aluno::class)->find($content->id_aluno);

        $projeto->addAluno($aluno);
        $emP->flush();

        return new JsonResponse($projeto);
//        $repositoryProjeto = $this->getDoctrine()->getRepository(Projeto::class);
//        $projeto = $repositoryProjeto->find($id);
//
//        $repositoryAluno = $this->getDoctrine()->getRepository(Aluno::class);
//        $aluno = $repositoryAluno->find($content->id_aluno);
//        $projetoUpdate = new Projeto();
//
//        $projeto->addAluno = $projetoUpdate->addAluno($aluno);
//        $this->entityManager->flush();
//        return new JsonResponse($projeto);

    }

    public function pesquisarProjeto(String $texto, Request $request):Response
    {
        $texto = $request->get('texto');

        $repository = $this->getDoctrine()->getRepository(Projeto::class);
        $query = $repository->createQueryBuilder('p')
            ->where('p.campus LIKE :texto')
            ->setParameter('texto', '%'.$texto.'%')
            ->getQuery();
        $trainings = $query->getResult();
//        $qb = $this->entityManager->createQueryBuilder();
//        $qb->select('p.campus')
//            ->from('Projeto', 'p')
//            ->where(
//                $qb->expr()->like('p.campus', '%'.$texto.'%')
//            );

        return new JsonResponse($trainings);
    }

//    public function desvincularAluno(Projeto $entity, Projeto $entityUpdate,int $id_projeto, int $id_aluno, Request $request):Response
//    {
////        $projeto = $this->objectRepository->find($id_projeto);
//        $em = $this->getDoctrine()->getManager();
//        $projeto = $em->getRepository(Projeto::class)->find($id_projeto);
//        $aluno = $em->getRepository(Aluno::class)->find($id_aluno);
//        $projeto->removeAluno($aluno);
//        $em->flush();
//        return new JsonResponse($projeto);
//    }
    public function desvincularAluno(int $id_projeto, int $id_aluno, Request $request):Response
    {
//        $projeto = $this->objectRepository->find($id_projeto);
        $emp = $this->getDoctrine()->getManager();
        $projeto = $emp->getRepository(Projeto::class)->find($id_projeto);

        $em = $this->getDoctrine()->getManager();
        $aluno = $em->getRepository(Aluno::class)->find($id_aluno);

        $projeto->removeAluno($aluno);
        $em->flush();
//        $entity->removeAluno($aluno);
        return new JsonResponse($projeto);
    }

}