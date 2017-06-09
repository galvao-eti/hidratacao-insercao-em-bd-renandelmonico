<?php

namespace Renan\Repository;

/**
 * Repositorio da entidade Usuario
 *
 * @author Renan Delmonico <renandelmonico@gmail.com>
 */
class Usuario implements Repository
{
    use \Renan\Traits\Hydrator;

    /**
     * Conexao PDO
     *
     * @var \PDO
     */
    private $conn;

    /**
     * Entidade de usuario
     *
     * @var \Renan\Entity\Usuario
     */
    private $entity;

    /**
     * Metodo construtor
     *
     * @param \PDO $conn
     * @param \Renan\Entity\Usuario $usuario
     */
    public function __construct(\PDO $conn, \Renan\Entity\Usuario $usuario)
    {
        $this->conn   = $conn;
        $this->entity = $usuario;
    }

    /**
     * Salva o usuario
     *
     * @return void
     */
    public function save()
    {
        $st = $this->conn->prepare("
            insert into usuario (
                email
               ,senha
            ) values (
                :email
               ,:senha
            )
        ");

        $st->bindParam(':email', $this->entity->email);
        $st->bindParam(':senha', $this->entity->senha);

        $st->execute();

        if ($st->errorCode() <> '00000') {
            throw new \Exception($st->errorInfo()[2]);
        }
    }
}
