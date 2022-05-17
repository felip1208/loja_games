<?php
    require("connect.php");
    
    $id_categoria = $_POST['check_categoria'];

    $sql_pesquisa_categoria = "SELECT * FROM `categoria`";

    $resultado_pesquisa = mysqli_query($conexao,$sql_pesquisa_categoria);

    $numero_resultado = mysqli_num_rows($resultado_pesquisa);

    if($numero_resultado == 0)
    {
        ?>
        <script>
            alert("Não existe categoriass cadastradas");
            window.location.replace("form_excluir_categoria.php");
        </script>
        <?php
    }
    else
    {
        $sql_excluir_categoria = "DELETE FROM `categoria`WHERE id_categoria = $id_categoria";

        mysqli_query($conexao, $sql_excluir_categoria);
        ?>
          <script>
            alert("Categoria excluída!");
            window.location.replace("form_excluir_categoria.php");
        </script>
        <?php
    }
?>