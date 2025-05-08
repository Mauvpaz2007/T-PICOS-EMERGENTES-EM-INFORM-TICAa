<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Agenda </title>
   <link rel="stylesheet" href="estilo.css">
</head>
<body>
     <H1 id="h1"> EXEMPLO - AGENDA<H1>
 
<form action= "salva.php" method= "post">
        Nome: <input type="text" id="nome" placeholder="Digite seu nome">
        <br><br>
        Endereço: <input type="text" id="endereco" placeholder="Digite seu endereco"> 
        <br><br>
        Telefone: <input type="text" id="telefone" placeholder="Digite seu número">
        <br><br>
        <input type="submit" value="Cadastrar"> <br><br>

 <?php

            $servidor = "localhost";
            $user = "root";
            $senha = "";
            $banco = "agenda";
            $conexao = mysqli_connect($servidor,$user,$senha,$banco);
            if(!$conexao){
                    echo "ERRO DE CONEXÃO";
          
            }
           
           
?>
<?php


    $sqli = "select * from contatos";
    $res = mysqli_query($conexao,$sqli);
    if(mysqli_num_rows($res)>0){
        while($linha= mysqli_fetch_assoc($res)){
            echo "<br>". $linha['nome']."<br>".$linha['endereco']."<br>".$linha['telefone']."<a href='edita.php'?id=" . $linha["id"] . "'>Editar</a> <a href='exclui.php?id=" . $linha["id"] . "'>Excluir</a><br>"
;        }

    }else{
        echo "Nenhum contato encontrado";
    }
?>

  
</body>

</html>