<?php

namespace Renan\Entity;

/**
 * Entidade de usuário
 *
 * @author Renan Delmonico <renandelmonico@gmail.com>
 */
class Usuario
{
    /**
     * Identificacao do usuario
     *
     * @var int
     */
    public $id;

    /**
     * E-mail
     *
     * @var string
     */
    public $email;

    /**
     * Senha
     *
     * @var string
     */
    public $senha;
}
