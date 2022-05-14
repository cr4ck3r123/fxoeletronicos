<?php

include_once("config.php");

$remetente = $email_admin;
$assunto = 'contato do site';

$mensagem = utf8_decode('Nome: '.$_POST['nome']. "\r\n"."\r\n" . 'Telefone: '.$_POST['telefone']. "\r\n"."\r\n" . 'Mensagem: ' . "\r\n"."\r\n" .$_POST['mensage']);
$dest = $_POST['email'];
$cabecalhos = "From: " .$dest;

mail($para, $assunto, $mensagem, $cabecalhos);

?>