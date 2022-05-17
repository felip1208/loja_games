<?php
    require("connect.php");

    $nome_jogo = $_POST["c_nome"];
    $id_categoria = $_POST["categoria_livro"];

    $pesquisar_nome = "SELECT * FROM `jogos` WHERE nome_jogo = '$nome_jogo'";
    $resultado_nome = mysqli_query($conexao, $pesquisar_nome);
    $numero_retorno = mysqli_num_rows($resultado_nome);

        if($numero_retorno == 0)
        {
            $sql_cadastrar = "INSERT INTO `jogos`(`nome_jogo`,`id_categoria`) VALUES ('$nome_jogo',$id_categoria)";

            mysqli_query($conexao, $sql_cadastrar);
            ?>
            <script>
                alert("jogo cadastrado!")
                window.location.replace("form_cadastrar_jogo.php");
            </script>
           <?php
        }else{ 
            ?> 
             <script>
                alert("Jogo já cadastrado");
                javascript:history.back();
             </script>
            <?php //abriu um codigo
        }  
?>