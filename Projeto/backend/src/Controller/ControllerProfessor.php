<?php


namespace App\Controller;


use App\Entity\Aluno;
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

    public function createProfessor(Request $request):Response
    {
        $content = json_decode($request->getContent());

        if($this->usuarioRepository->findByEmail($content->email)){
            return new JsonResponse(["erro"=>"Já existe um professor com esse e-mail"], '401');
        }

        if(strlen($content->senha)<7){
            return new JsonResponse(['error'=>'Senha com menos de 8 caracteres'],'401');
        }

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

    }


    public function updateProfessor(int $id, Request $request):Response{
        $content = json_decode($request->getContent());
        $id = $request->get('id');


        $professor = $this->objectRepository->find($id);

        $professor->setNome($content->nome);
        $professor->setMatricula($content->matricula);
        $professor->setCpf($content->cpf);
        $professor->setCurriculoLatte($content->curriculoLatte);
        $professor->setFoto($content->foto);
        $professor->setAreaAtuacao($content->areaAtuacao);
        $professor->setSenha($content->senha);
        $this->entityManager->flush();
        return new JsonResponse($professor);

    }



    public function buscarTodos(){
        $listaProfessor = $this->objectRepository->findAll();
        return new JsonResponse($listaProfessor);
    }

    /**
     * @param $entity
     * @param $entityUpdate
     */
    public function updateEntity($entity, $entityUpdate)
    {
        $entity->setNome($entityUpdate->setNome());
        $entity->setCpf($entityUpdate->setCpf());
        $entity->setFoto($entityUpdate->setFoto());
        $entity->setAreaAtuacao($entityUpdate->setAreaAtuacao());
        $entity->setsetCurriculoLatte($entityUpdate->setsetCurriculoLatte());
        $entity->setCpf($entityUpdate->setCpf());
    }
}