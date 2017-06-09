<?php

namespace Renan\Manager;

/**
 * Manager de produto
 *
 * @author Renan Delmonico <renan.delmonico@gmail.com>
 */
class Produto implements Manager
{
    /**
     * Repository de produto
     *
     * @var \Renan\Repository\Produto
     */
    private $repository;

    /**
     * Metodo construtor
     *
     * @param \PDO $conn
     * @param \Renan\Entity\Produto $prod
     */
    public function __construct(\Renan\Repository\Produto $prod)
    {
        $this->repository = $prod;
    }

    /**
     * Salva o produto no banco de dados
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
     * Retorna o repositorio de produtos
     *
     * @return \Renan\Repository\Produto
     */
    private function getRepository():\Renan\Repository\Produto
    {
        return $this->repository;
    }
}
