<?php


namespace App\Helper;

use App\Entity\Professor;
use App\Entity\Usuario;
use App\Repository\UsuarioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class ProfessorFactory extends UserPasswordEncoder implements EntityFactory
{

    private $usuarioRepository;

    public function __construct(EncoderFactoryInterface $encoderFactory,UsuarioRepository $usuarioRepository)
    {
        parent::__construct($encoderFactory);
        $this->usuarioRepository = $usuarioRepository;
    }

    public function create(string $json):Professor
    {
        $content = json_decode($json);

        if(!$this->usuarioRepository->findByEmail($content->email)){
            $professor = new Professor();
            $usuario = new Usuario();
            $usuario->setEmail($content->email)->setPassword($this->encodePassword($usuario, $content->senha));
            $professor->setNome($content->nome)
                ->setCpf($content->cpf)
                ->setMatricula($content->matricula)
                ->setFoto($content->foto)
                ->setSenha($content->senha)
                ->setAreaAtuacao($content->areaAtuacao)
                ->setCurriculoLatte($content->curriculoLatte)
                ->setUsuario($usuario);

        }else{
            $professor = new JsonResponse(["erro"=>"E-mail já cadastrado"], Response::HTTP_BAD_REQUEST);
        }
        return $professor;
    }

}