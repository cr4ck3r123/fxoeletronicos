<?php

include_once 'conexao.php';
$pdo = conecta();


//FUNÇÃO LISTAR
function listarEletronico($pagina, $itens_por_pagina) {
    $pdo = conecta();
    try {
        $listar = $pdo->query("SELECT * FROM eletronicos LIMIT $pagina, $itens_por_pagina");
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
function listarEletronicosTotal() {
    $pdo = conecta();
    try {
        $listar = $pdo->query("SELECT * FROM eletronicos");
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
function recuperaDadosEletronicos() {
    $pdo = conecta();
    $_SESSION['id'] =  addslashes($_GET['tipo']);
    try {
        $pegaDados = $pdo->prepare("SELECT * FROM eletronicos
WHERE id = ?");
        $pegaDados->bindValue(1, $_SESSION['id'], PDO::PARAM_STR);
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

//FUNÇÃO DE CADASTRO 
function cadastro($nome, $telefone, $email, $senha) {
    $pdo = conecta();
    $nivel = "Cliente";
    try {
        $cadastro = $pdo->prepare("INSERT INTO usuarios(nome, whatssap, email, senha) VALUES (?,?,?,?);");
        $cadastro->bindValue(1, $nome, PDO::PARAM_STR);
        $cadastro->bindValue(2, $telefone, PDO::PARAM_STR);
        $cadastro->bindValue(3, $email, PDO::PARAM_STR);
        $cadastro->bindValue(4, $senha, PDO::PARAM_STR);
        $cadastro->execute();

        if ($cadastro->rowCount() > 0):
            return TRUE;
        else :
            return FALSE;
        endif;
    } catch (PDOException $exc) {
        echo $exc->getLine();
        echo "<br>";
        echo $exc->getMessage();
    }
}

?>