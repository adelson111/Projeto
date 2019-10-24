<?php


namespace App\Controller;


use App\Entity\Professor;
use App\Entity\Usuario;
use App\Helper\ProfessorFactory;
use App\Helper\HandleRequest;
use App\Repository\ProfessorRepository;
use App\Repository\UsuarioRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ControllerProfessor extends GenericController
{
    private $usuarioRepository;
    private $encoder;
    public function __construct(ProfessorRepository $professorRepository,
                                EntityManagerInterface $entityManager,
                                ProfessorFactory $professorFactory,
                                HandleRequest $handleRequest,
                                UsuarioRepository $usuarioRepository,
                                UserPasswordEncoderInterface $encoder)
    {
        parent::__construct($professorRepository, $entityManager, $professorFactory, $handleRequest);
        $this->usuarioRepository = $usuarioRepository;
        $this->encoder = $encoder;
    }

    public function create(Request $request):Response
    {
        $content = json_decode($request->getContent());

        if(!$this->usuarioRepository->findByEmail($content->email)){
            $professor = new Professor();
            $usuario = new Usuario();
            $usuario->setEmail($content->email)->setPassword($this->encoder->encodePassword($usuario, $content->senha));
            $professor->setNome($content->nome)
                ->setCpf($content->cpf)
                ->setMatricula($content->matricula)
                ->setFoto($content->foto)
                ->setSenha($content->senha)
                ->setAreaAtuacao($content->areaAtuacao)
                ->setCurriculoLatte($content->curriculoLatte)
                ->setUsuario($usuario);
            $this->entityManager->persist($professor);
            $this->entityManager->flush();
            return new JsonResponse($professor);
        }else{
            return new JsonResponse(["erro"=>"E-mail já cadastrado"], Response::HTTP_BAD_REQUEST);
        }

    }





    public function buscarTodos(){
        $listaProfessor = $this->objectRepository->findAll();
        return new JsonResponse($listaProfessor);
    }

    public function updateEntity($entity, $entityUpdate)
    {
        $entity->setNome($entityUpdate->setNome());
    }
}