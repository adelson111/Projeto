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

    public function pesquisarProjeto(String $texto, Request $request):Response
    {
        $texto = $request->get('texto');
        $entity = $this->objectRepository->findByCampus($texto);
//        $repository = $this->getDoctrine()->getRepository(Projeto::class);
//        $query = $this->objectRepository->createQueryBuilder('p')->where('p.campus LIKE :campus')->setParameter('campus', '%'.$texto.'%')->getQuery();
//        $query = $this->objectRepository->createQuery('select * from projeto p WHERE p.campus LIKE :campus')->setParameter('campus', '%'.$texto.'%')->getQuery();
//        $query = $repository->createQueryBuilder('p')->where('p.nome LIKE :texto')->setParameter('texto', '%'.$texto.'%')->getQuery();
//        $resultado = $query->getResult();
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('nome')
            ->from('Projeto', 'p')
            ->where(
                $qb->expr()->like('p.campus', "$texto")
            );
        return new JsonResponse($qb);
    }

}