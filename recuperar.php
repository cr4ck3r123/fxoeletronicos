<?php

include_once 'config.php';
include_once 'conexao.php';

$pdo = conecta();

$email_usuario = $_POST['email-recuperar'];

$res = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");

$res->bindValue(1, $email_usuario, PDO::PARAM_STR);
$res->execute();

$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);

if ($linhas > 0) {
    $nome_usu = $dados[0]['nome'];
    $senha_usu = $dados[0]['senha'];

   
} else {
    echo 'Este email não esta cadastrado no site!';
    exit();
}

 //AQUI VAI O CODIGO DE ENVIO DO EMAIL
    $to = $email_usuario;
    $subject = 'Recuperação de Senha Shampoo Gelado';

    $message = " Olá $nome_usu!! <br><br> Sua Senha é <b>$senha_usu</b>"
            . "<br><br> Ir para o Sistema  -> <a href='$url_site' target='_blank'> Clique Aqui </a>";

    $remetente = $email_admin;
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers = 'Content-type: text/html; charset=utf-8' . '\r\n';
    $headers = 'From: ' . $remetente;
    @mail($headers, $subject, $message);

    echo "Senha enviada para o seu Email";
?>