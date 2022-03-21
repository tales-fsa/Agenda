<?php 
    // Estabelece o nome do arquivo para a variável
    $arquivo = 'Arquivo.txt';

    // Abre o arquivo ou cria se por acaso não exista o arquivo
    $abrir = fopen($arquivo, 'a+');

    // Realiza a contagem de linhas no aquivo para ser utiizado no incremento do Id da lista
    $linhas = count(file($arquivo));
    
    // Incremento para o Id da lista
    $id = $linhas + 1;

    //Captura os dados digitados no formulário 
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    //se não tem nenhum dado no texto preenche a a variavel sem pular linha
    if ($id === 1) {
       $dados = $id .','.$nome.','.$telefone;  
    } 

    //Se houver dados no texto preenche a variavel pulando uma linha
    if ($id > 1) {
        $dados = PHP_EOL.$id .','.$nome.','.$telefone;
    }    

    // Gravação dos dados no arquivo de texto
    fwrite($abrir, $dados);

    //Fecha o aquivo
    fclose($abrir);

    //Direcionamento para a pagina inicial
    header('Location: /index.php');
?>