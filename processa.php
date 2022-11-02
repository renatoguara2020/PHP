


<?php

include_once "connection.php";





$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);




$result_usuario = "INSERT INTO usuarios (nome, email, NOW() ) VALUES ('$nome', '$email', NOW())";



$query_user = "INSERT INTO  usuarios (nome, email, created) VALUES (:nome, :email, :NOW())";



