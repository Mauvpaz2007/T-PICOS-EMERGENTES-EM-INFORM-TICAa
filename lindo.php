
<html>

<body>
<form  method="post" action="formulario.php">


Digite seu nome

<input type="text" size="80" name="txtnome" >

<input type="submit" name= "enviar" value="enviar">


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


