<?php

namespace Renan\Entity;

/**
 * Entidade de produto
 *
 * @author Renan Delmonico <renandelmonico@gmail.com>
 */
class Produto
{
    /**
     * Identificacao do produto
     *
     * @var int
     */
    public $idproduto;

    /**
     * Nome
     *
     * @var string
     */
    public $nome;

    /**
     * Valor
     *
     * @var float
     */
    public $valor;
}
