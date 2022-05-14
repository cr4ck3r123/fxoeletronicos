<?php

include_once 'conexao.php';
$pdo = conecta();

//FUNÇÃO LISTAR
function listarCasaCozinha($pagina, $itens_por_pagina) {
    $pdo = conecta();
    try {
        $listar = $pdo->query("SELECT * FROM casaecozinha LIMIT $pagina, $itens_por_pagina");
        $listar->execute();
      
        if ($listar->rowCount() > 0):
            return $listar->fetchAll();
        else :
            return FALSE;
        endif;
    } catch (PDOException $exc) {
        echo $exc->getLine();
        echo "<br>";
        echo $exc->getMessage();
    }
}

//FUNÇÃO LISTAR
function listarCasaCozinhaTotal() {
    $pdo = conecta();
    try {
        $listar = $pdo->query("SELECT * FROM casaecozinha");
        $listar->execute();

        if ($listar->rowCount() > 0):
            return $listar->rowCount();
        else :
            return FALSE;
        endif;
    } catch (PDOException $exc) {
        echo $exc->getLine();
        echo "<br>";
        echo $exc->getMessage();
    }
}



//FUNÇÃO CONSULTA PARA TRAZER O CPF
function recuperaDadosCasa($id) {
    $pdo = conecta();
    try {
        $pegaDados = $pdo->prepare("SELECT * FROM casaecozinha
WHERE id = ?");
        $pegaDados->bindValue(1, $id, PDO::PARAM_STR);
        $pegaDados->execute();

        if ($pegaDados->rowCount() > 0):
            return $pegaDados->fetch();
        else :
            return FALSE;
        endif;
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }
}


?>