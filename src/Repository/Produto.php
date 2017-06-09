<?php

namespace Renan\Repository;

/**
 * Repositorio da entidade produto
 *
 * @author Renan Delmonico <renandelmonico@gmail.com>
 */
class Produto implements Repository
{
    use \Renan\Traits\Hydrator;

    /**
     * Conexao PDO
     *
     * @var \PDO
     */
    private $conn;

    /**
     * Entidade de produto
     *
     * @var \Renan\Entity\Produto
     */
    private $entity;

    /**
     * Metodo construtor
     *
     * @param \PDO $conn
     * @param \Renan\Entity\Produto $produto
     */
    public function __construct(\PDO $conn, \Renan\Entity\Produto $produto)
    {
        $this->conn   = $conn;
        $this->entity = $produto;
    }

    /**
     * Salva o produto
     *
     * @return void
     */
    public function save()
    {
        $st = $this->conn->prepare("
            insert into produto (
                nome
               ,valor
            ) values (
                :nome
               ,:valor
            )
        ");

        $st->bindParam(':nome', $this->entity->nome);
        $st->bindParam(':valor', $this->entity->valor);

        $st->execute();

        if ($st->errorCode() <> '00000') {
            throw new \Exception($st->errorInfo()[2]);
        }
    }
}
