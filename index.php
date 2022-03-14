<?php
  if (file_exists('Arquivo.txt')){
    $arquivo = 'Arquivo.txt';
    $abrir = fopen($arquivo, 'r');
?>        
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Agenda</title>
  </head>
  <body>
    <div class="container">
          
      <table class="tabela">
        <thead>
          <tr>
            <th class="small">Id</th>
            <th class="large">Nome</th>
            <th class="medium">Telefone</th>
          </tr>
        </thead>
        <tbody>
          <?php while (!feof($abrir)) { ?>
            <tr>
              <?php $nome = explode(',',fgets($abrir)); ?>
              <td><?php echo $nome[0]?></td>
              <td><?php echo $nome[1]?></td>
              <td><?php echo $nome[2]?></td>
            </tr>
          <?php } 
            fclose($abrir);
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
<?php
  } else {
    echo 'Arquivo não encontrado';
  }  
?> 
