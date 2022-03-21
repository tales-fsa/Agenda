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
    <?php
      /*
        Verificar a existência do arquivo
      **/
      if (file_exists('Arquivo.txt')){
        /** Abrir o arquivo */
        $arquivo = 'Arquivo.txt';
        /** abre somente para leitura colocando o ponteiro no inicio do aqrquivo */
        $abrir = fopen($arquivo, 'r');
    ?>
    <div class="container">
      <div class="title">
        <h1>Agenda</h1>
      </div>
      <table class="tabela">
        <thead>
          <tr>
            <th class="small">Id</th>
            <th class="large">Nome</th>
            <th class="medium">Telefone</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            /*
             Looping para leitura dos dados no arquivo
            **/
            while (!feof($abrir)) { 
          ?>
            <tr>
              <?php
                /*
                  Colocar em um array os itens separados por uma virgula 
                **/ 
                $nome = explode(',',fgets($abrir)); 
              ?>
              <!-- imprimir os dados da array nas células -->
              <?php if(empty($nome) || $nome[0] == '') { ?>
                <td></td>
                <td></td>
                <td></td>
              <?php } else { ?>
                <td id="td1"><?php echo $nome[0]?></td>
                <td id="td2"><?php echo $nome[1]?></td>
                <td id="td3"><?php echo $nome[2]?></td>
              <?php } ?>
            </tr>
          <?php } 
            /* Fechar o ponteiro de arquivo aberto **/          
            fclose($abrir);
          ?>
        </tbody>
      </table>
      <div>
        <a class="desktop" href="cadastrar.php">Adicionar</a>
     </div>
    </div>
    <div>
        <a class="mobile" href="cadastrar.php">Adicionar</a>
     </div>
    <?php
      } else {
        /** Se nao encontrar o arquivo exibir a mensagem de não encontardo o arquivo  e um botao para cadstrar e criar o arquivo*/ 
    ?>
        <div class="mensagem-erro">
          <p id="mensagem">Arquivo não encontrado, clique no botão para realizar um cadastro e criar o aquivo !</p>
          <div class="botao-criar">
            <a href="cadastrar.php">Criar cadastro</a>
          </div>
        </div>
    <?php
      }  
    ?> 
  </body>
</html>