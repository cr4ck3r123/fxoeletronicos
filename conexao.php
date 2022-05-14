<?php

//  CONTANTES 
define("DB_SERVER", "localhost");
define("USUARIO", "phpmyadmin");
define("SENHA", "nando1287");
define("DB_NAME", "dbfxoeletronicos");

//função de conexão
function conecta() {

    $dsn = "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => true,
    ];    
   
    try {
        $conn = new PDO($dsn, USUARIO, SENHA, $opt);
               
        /*$stmt = $pdo->prepare("SELECT * FROM admin where id = :id");
        $stmt->execute(array("id" => $id));
        $result = $stmt->fetch();
         */
        return $conn;
    } catch (PDOException $erro) {
        echo "Erro com no banco de dados " . $erro->getMessage();
    } catch (Exception $e) {
        echo "Erro generico " . $e->getMessage();
    }
}


?>