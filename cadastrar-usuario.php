<?php 

include_once 'conexao.php';
$pdo = conecta();

//DADOS FORMULADORIO CADASTRAR
$nome = $_POST['nome']; 
$telefone = $_POST['telefone']; 
$email = $_POST['email']; 
$senha = $_POST['senha']; 
$senha_conf = $_POST['confsenha']; 

if($senha != $senha_conf){
        echo "Senha não Confere!";
        exit();        
    }
try {
    $dados = recuperaDados($email);
    $email_rec = $dados[0]['email'];
   
    if($email == $email_rec){
        echo "Email já Cadastrado!";
        exit();
        
    }
    
    
      
  if(cadastro($nome, $telefone, $email, md5($senha)) == true){
       echo "Cadastrado com Sucesso!!";
  }
 
  
  
    } catch (Exception $exc) {
    echo $exc->getTraceAsString();
}


//FUNÇÃO LISTAR
function listar() {
    $pdo = conecta();
    try {
        $listar = $pdo->query("SELECT * FROM usuarios");
        $listar->execute();

        if ($listar->rowCount() > 0):
            return $listar->fetchAll(PDO::FETCH_OBJ);
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
function recuperaDados($email) {
    $pdo = conecta();
    try {
        $pegaEmail = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $pegaEmail->bindValue(1, $email, PDO::PARAM_STR);  
        $pegaEmail->execute();

        if ($pegaEmail->rowCount() > 0):
            return $pegaEmail->fetchAll(PDO::FETCH_ASSOC);
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
        $cadastro = $pdo->prepare("INSERT INTO usuarios(nome, whatssap, email, senha, nivel_usuario) VALUES (?,?,?,?,0);");
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