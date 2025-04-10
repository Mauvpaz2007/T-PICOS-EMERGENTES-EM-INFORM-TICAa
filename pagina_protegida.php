<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página FBI</title>
</head>
<body>




<?php
    if (isset($_POST['botao'])) {
        $username = $_POST['txtname'];
        $senha = $_POST['txtsenha'];

        if($username == "docente" && $senha == "1234"){
            echo "<h1>Bem-vindo, $username!</h1>";
            echo "<p>Você provou merecimento ao acesso.</p>";

       
        }else if($username == "discente" && $senha == "1234"){ 
            echo "<h1>Bem-vindo, $username!</h1>";
            echo "<p>Você provou merecimento ao acesso.</p>";
            
        }else{
            echo "<h1>Acesso Negado</h1>";
            echo "<p>Usuário ou senha incorretos.</p>";
            

        }
    }
    ?>
    <style>
        body {
            text-align: center;
            font-size: 35px;
            font-family: sans-serif;
            margin-top:150px;
        }i
</style>

</body>
</html>