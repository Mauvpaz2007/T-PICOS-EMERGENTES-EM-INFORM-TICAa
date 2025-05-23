<html>

<body>
    <h2>Cadastrar Contato</h2>
   
    <form method="post" action="salvar.php">

        Nome: <input type="text" name="nome" required><br><br>
        Endereço: <input type="text" name="endereco"><br><br>
        Telefone: <input type="text" name="telefone"><br><br>
        <input type="submit" value="Salvar">
    </form>

    <h2>Lista de Contatos</h2>
    <?php
    include('conexao.php');

    $sql = "SELECT * FROM contatos";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo $linha['nome'] . " | " . $linha['endereco'] . " | " . $linha['telefone'] .
                " | <a href='editar.php?id=" . $linha["id"] . "'>Editar</a>" .
                " | <a href='excluir.php?id=" . $linha["id"] . "'>Excluir</a> <br>";
        }
    } else {
        echo "Nenhum contato encontrado.";
    }
    ?>
 <!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <style>
    
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      background: #f0f4f8;
      color: #333;
      line-height: 1.6;
      padding: 2rem;
    }
    h1 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #005f73;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: 700;
    }
    .container {
      max-width: 900px;
      margin: 0 auto;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgb(0 0 0 / 0.1);
      padding: 2rem;
    }
    /* Search */
    .search-bar {
      display: flex;
      justify-content: center;
      margin-bottom: 2rem;
    }
    .search-bar input {
      width: 100%;
      max-width: 400px;
      padding: 0.75rem 1rem;
      border-radius: 50px;
      border: 2px solid #94d2bd;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }
    .search-bar input:focus {
      outline: none;
      border-color: #0a9396;
      box-shadow: 0 0 8px #0a9396;
    }
    /* Contact cards layout */
    .contacts {
      display: grid;
      gap: 1.5rem;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    }
    .contact-card {
      background: #e9f5f2;
      border-radius: 12px;
      padding: 1.5rem 2rem;
      box-shadow: 0 4px 16px rgb(10 147 150 / 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: default;
    }
    .contact-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 28px rgb(10 147 150 / 0.35);
    }
    .contact-name {
      font-size: 1.3rem;
      font-weight: 700;
      color: #005f73;
      margin-bottom: 0.3rem;
    }
    .contact-info {
      color: #333;
      margin-bottom: 0.6rem;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
    }
    .contact-info svg {
      width: 16px;
      height: 16px;
      fill: #0a9396;
      margin-right: 0.5rem;
      flex-shrink: 0;
    }
    /* Footer */
    footer {
      margin-top: 3rem;
      text-align: center;
      font-size: 0.85rem;
      color: #666;
    }
  </style>



</body>

</html>