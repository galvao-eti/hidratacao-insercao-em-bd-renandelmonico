<?php

namespace Renan\Manager;

/**
 * Manager de usuario
 *
 * @author Renan Delmonico <renan.delmonico@gmail.com>
 */
class Usuario implements Manager
{
    /**
     * Repository de usuario
     *
     * @var \Renan\Repository\Usuario
     */
    private $repository;

    /**
     * Metodo construtor
     *
     * @param \PDO $conn
     * @param \Renan\Entity\Usuario $usuario
     */
    public function __construct(\Renan\Repository\Usuario $usuario)
    {
        $this->repository = $usuario;
    }

    /**
     * Salva o usuario no banco de dados
     *
     * @return void
     */
    public function save()
    {
        $this->getRepository()->save();
    }

    /**
     * Hidrata a entidade
     *
     * @return void
     */
    public function hydrate(array $data)
    {
        $this->getRepository()->hydrate($data);
    }

    /**
     * Retorna o repositorio de usuarios
     *
     * @return \Renan\Repository\Usuario
     */
    private function getRepository():\Renan\Repository\Usuario
    {
        return $this->repository;
    }
}
