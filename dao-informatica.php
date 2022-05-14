<?php

include_once 'conexao.php';
$pdo = conecta();

//FUNÇÃO LISTAR
function listarInformatica($pagina, $itens_por_pagina) {
    $pdo = conecta();
    try {
        $listar = $pdo->query("SELECT * FROM informatica LIMIT $pagina, $itens_por_pagina");
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
function listarInformaticaTotal() {
    $pdo = conecta();
    try {
        $listar = $pdo->query("SELECT * FROM informatica");
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
function recuperaDadosInformatica($id) {
    $pdo = conecta();
    try {
        $pegaDados = $pdo->prepare("SELECT * FROM informatica
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


//if(isset($_POST['btn-cadastro'])){
//    
//$nome = $_POST['nome']; 
//$cpf = $_POST['cpf']; 
//$telefone = $_POST['telefone']; 
//$email = $_POST['email']; 
//$senha = $_POST['senha']; 
//
//try {
//    $this->cadastro($nome, $cpf, $telefone, $email, $senha);
//} catch (Exception $exc) {
//    echo $exc->getTraceAsString();
//}
//
//$res = $pdo->prepare("INSERT INTO usuarioss (nome, cpf, telefone, email, senha, nivel)"
//        . "values (:nome, :cpf, :telefone, :email, :senha, :nivel)");
//
//$res->bindValue(":nome", $nome);
//$res->bindValue(":cpf", $cpf);
//$res->bindValue(":telefone", $telefone);
//$res->bindValue(":email", $email);
//$res->bindValue(":senha", $senha);
//$res->bindValue(":nivel", 'Cliente');
//
//$res->execute();
//echo $nome, $cpf;
?>