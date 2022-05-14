<?php

require_once ('./conexao.php');
@session_start();
$pdo = conecta();

if(empty(['username']) || empty($_POST['pass'])){
    echo "<script language='javascript'>window.location='login.php'</script>";
}

$usuario = $_POST['username'];
$senha = md5($_POST['pass']);

//echo $usuario.$senha;
$res = $pdo->prepare("SELECT * FROM usuarios where email = :usuario and senha = :senha");
$res->bindValue(":usuario", $usuario);
$res->bindValue(":senha", $senha);
$res->execute();

$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);

if($linhas > 0){
    $_SESSION['nome_usuario'] = $dados[0]['nome'];
    $_SESSION['email_usuario'] = $dados[0]['email'];
    $_SESSION['nivel_usuario'] = $dados[0]['nivel_usuario'];
    
    
   if($_SESSION['nivel_usuario'] == 1){
       header("location:painel-adm/index.php");
       exit();
    }else{
     header("location:index.php");
        
    }
}else{
    echo "<script language='javascript'>window.alert('Dados Incorretos!!!');</script>";
    echo "<script language='javascript'>window.location='login.php';</script>";
}