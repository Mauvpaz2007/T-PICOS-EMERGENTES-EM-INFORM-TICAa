<?php 
include("conexao.php")
$nome = $_POST['name'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO contatos (nome, endereco, telefone) VALUES ('$nome', '$endereco', '$telefone')";
$resultado = mysqli_query($conexao, $sql);
if (mysqli_query($conexao, $sql)) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
}
?>