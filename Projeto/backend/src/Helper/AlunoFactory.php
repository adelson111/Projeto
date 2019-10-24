<?php


namespace App\Helper;


use App\DataFixtures\AppFixtures;
use App\Entity\Aluno;
use App\Entity\Usuario;
use App\Repository\UsuarioRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class AlunoFactory implements EntityFactory
{
    private $usuarioRepository;


//    public function __construct(UsuarioRepository $usuarioRepository)
//    {
//
//    }
    public function __construct(UsuarioRepository $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function create(string $json):Aluno
    {
//        $content = json_decode($json);
//
//        $aluno = new Aluno();
//        $usuario = new Usuario();
////            $usuario->setEmail($content->email)->setPassword($content->senha);
//        $usuario->setEmail($content->email)->setPassword($this->encodePassword($usuario, $content->senha));
//        $aluno->
//        setNome($content->nome)
//            ->setCpf($content->cpf)
//            ->setMatricula($content->matricula)
//            ->setCurso($content->curso)
//            ->setFoto($content->foto)
//            ->setSenha($content->senha)
//            ->setCurriculoLatte($content->curriculoLatte)
//            ->setUsuario($usuario);
//        return $aluno;


    }
}