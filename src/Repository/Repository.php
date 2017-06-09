<?php

namespace Renan\Repository;

/**
 * Interface dos repositorios
 *
 * @author Renan Delmonico <renandelmonico@gmail.com>
 */
interface Repository
{
    /**
     * Realiza o insert no banco de dados
     *
     * @return void
     */
    public function save();
}
