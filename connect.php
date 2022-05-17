<?php
    //Arquivo de conexão do PHP com MySQL
    //Criando e salvando a conexão em uma variável
    $conexao = mysqli_connect ("localhost","root","");
    //Verificando a conexão
    if(mysqli_connect_errno())
    {
        //Imprime a tela de erro de conexão
        echo "falha ao conectar: ". mysqli_connect_error(); die();
    }
    //Seleciona o banco desejado
    mysqli_select_db($conexao, "games_db");
    ?>  