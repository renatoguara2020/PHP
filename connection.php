<?php


$host = "localhost";
$dbname = "testes";
$user = "root";
$pass = "";


try {

    $conn = new PDO("mysql:host=$host;dbname" .$dbname, $user, $pass);

    echo "<h1>Sucesso na conexão com o bando de dados</h1>";
    echo "RENATO ALVE SOARES";

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

   



} catch (PDOException $ex) {

    throw new PDOException("Erro: Não foi possível executar a declaração SQL");    
    
echo "<h1>Erro ao conectar com o banco de dados</h1>".$ex->getMessage();
    
}