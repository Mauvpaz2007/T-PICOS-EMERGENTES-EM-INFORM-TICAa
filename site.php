<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<style>
    body{
    text-align: center; 
    background-color: aliceblue;
   font-family: Arial, sans-serif;
   margin-top: 120px;

    }


   </style>
<body>
    <p>Formulário do MAURÍCIO</p>

    <form action="site.html" method="POST">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <br>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>
        <br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>
        <br>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
       
       
       
           </style>
             
       
    </form>
    
</body>
<?php
$servidor="localhost";
$usr="root";
$senha="";
$formulario="agenda";
$conexao = mysqli_connect($servidor, $usr, $senha, $formulario);
if (!$conexao){
    echo "Erro de conexão";
}else{
    echo "Conexão realizada com sucesso!";
}
$nome = $_POST['name'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

?>
</html>