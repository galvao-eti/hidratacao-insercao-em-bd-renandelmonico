<?php

namespace Renan\Connection;

/**
 * Interface para as conexoes com banco de dados
 *
 * @author Renan Delmonico <renandelmonico@gmail.com>
 */
interface DB
{
    /**
     * Metodo construtor das conexoes
     *
     * @param string $user
     * @param string $pass
     * @param string $database
     * @param string $host
     * @param int $port
     */
    public function __construct(string $user, string $pass, string $database, string $host, int $port);

    /**
     * Retorna a conexao PDO
     *
     * @return \PDO
     */
    public function getConnection():\PDO;
}
