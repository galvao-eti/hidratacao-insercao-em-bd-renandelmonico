<?php

require 'vendor/autoload.php';

$config = json_decode(file_get_contents('config.json'));

$conn = new Renan\Connection\Database($config->user, $config->pass, $config->database, $config->host, $config->port);

$produtoRepository = new Renan\Repository\Produto($conn->getConnection(), new Renan\Entity\Produto);
$produtoManager = new Renan\Manager\Produto($produtoRepository);
$produtoManager->hydrate([
    'nome' => 'Teste',
    'valor' => 10.01
]);

$usuarioRepository = new Renan\Repository\Usuario($conn->getConnection(), new Renan\Entity\Usuario);
$usuarioManager = new Renan\Manager\Usuario($usuarioRepository);
$usuarioManager->hydrate([
    'email' => 'renandelmonico@gmail.com',
    'senha' => 123
]);

try {
    $conn->getConnection()->beginTransaction();

    $produtoManager->save();
    $usuarioManager->save();

    $conn->getConnection()->commit();

    echo 'Salvo com sucesso';
} catch (Exception $e) {
    $conn->getConnection()->rollBack();

    echo $e->getMessage();
}
