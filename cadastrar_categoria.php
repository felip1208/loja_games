<?php

    require("connect.php");

    //Obtendo os valores do formulário
    $descricao = $_POST["c_descricao"];

    $pesquisar_descricao = "SELECT * FROM `categoria` WHERE descricao_categoria = '$descricao'";
    $resultado_descricao = mysqli_query($conexao, $pesquisar_descricao);
    $numero_retorno = mysqli_num_rows($resultado_descricao);

        if($numero_retorno == 0)
        {
            $sql_cadastrar = "INSERT INTO `categoria`(`descricao_categoria`) VALUES ('$descricao')";

            mysqli_query($conexao, $sql_cadastrar);
            echo "Categoria cadastrada!";
        }else{
            ?> 
            
            <script>
                alert("Categoria já cadastrada");
                javascript:history.back();
            </script>
            <?php //abriu um codigo
        }  
?>