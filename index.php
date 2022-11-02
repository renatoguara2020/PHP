<?php

include_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Listar usuários em PHP</h2>

<form action="processa.php" method="POST">

        
    <p>Your name: <input type="text" name="nome" /></p>
    <p>Your E-mai: <input type="email" name="email" /></p>
    <p>Data de nascimento: <input type="date" name="dataNascimento"/></p>
    <p><input type="submit"/> </p>
</form>
    
</body>
</html>


