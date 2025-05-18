<?php 
include('conexao.php');

if (isset($_GET['id'])){
$id = $_GET['id'];

$sql = "SELECT * FROM contatos WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($reslutado) == 1){
    $contato = mysqli_fetch_assoc($resultado);
}else{ 
    echo "O contato não foi encontrado";
    exit;


}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
   <h2>Editar contatos</h2>
    Nome: <input type="text" name="nome" value="<?php echo $contato['nome'];?>"required>;
    Endereco: <input type="text" name="endereco" value="<?php echo $contato['endereco'];?>"required>;   
    Telefone: <input type="text" name="telefone" value="<?php echo $contato['telefone'];?>"required>;
    <input type="submit" value="Salvar">
</body>
</html>