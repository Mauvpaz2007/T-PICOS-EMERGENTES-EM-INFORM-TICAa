<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site do mau</title>
</head>
<body>
    <form method="post" action= "atividade.php"><h1>Insira seus dados pessoais<h1> <br> 
     <h1> Nome :<h1>
    <input type="text" size="24" name="txtnome">


    <h1> Endereço :<h1>
    <input type="text" name="txtende" size="22">
    
    
    <h1> Idade :<h1>
    <input type="text" name="txtidade" size="6">

    <h1> Sexo :<h1>
    <input type="radio" name="opcao" value="masculino" > Masculino<br>
    <input type="radio" name="opcao" value="feminino" > Feminino<br>
    <input type="radio" name="opcao" value="outro" > Outro <br>
    
    <input type= "submit" value= "enviar" name="enviv">
    <br>
    </form> 
    <?php 
if (isset($_POST ["enviv"])){
    $_txtnome=$_POST["txtnome"];
    $_txtende=$_POST["txtende"];
    $_txtidade=$_POST["txtidade"];
    $_txtopcao=$_POST["opcao"];
   
    if ($_txtidade>=18){
    echo "Seu nome é $_txtnome, você tem $_txtidade anos, seu endereço é $_txtende e você é do sexo $_txtopcao";
}else{
   
    echo "Você é menor de idade, acesso negado!";

}
}
  ?>
</body>
</html>