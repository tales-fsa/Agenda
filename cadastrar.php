<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Agenda</title>
  </head>
  <body> 
      <div class="container formulario">
        <form method="POST" action="gravar.php">
            <h1>Cadastrar</h1>
            <input type="text" name="nome" class="input-nome" placeholder="Nome" />
            <input type="tel" name="telefone"  class="input-telefone" placeholder="Telefone" />
            <input type="submit" class="submit" value="Enviar" />
            <a id="voltar" href="index.php">Volta para pagina inicial</a>
        </form>
    </div> 
  </body>
</html>  
