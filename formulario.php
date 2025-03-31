<html>

<body>
<form  method="post" action="formulario.php">






</form>
<?php
if(isset ($_POST["enviar"])){
$nome=  $_POST["txtnome"];
echo"<h2> Seu nome é $nome</h2>";
}else
echo "<h2> preencha com algum nome</h2>";

?>

</body>
</html>



