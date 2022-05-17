<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Categoria</title>
</head>
<body>
    <h2>Excluir Categoria</h2>
    <form action="excluir_categoria.php" method="post">
    <table border = "1">
        <tr>
            <td>ID de categoria</td>
            <td>Categoria</td>
            <td>Selecionar</td>
        </tr>
        <?php
            require("connect.php");

            $pesquisar_categorias = "SELECT * FROM `categoria`";
            $resultado_categorias = mysqli_query($conexao, $pesquisar_categorias);
            $numero_resultado = mysqli_num_rows($resultado_categorias);

            
        if($numero_resultado == 0)
        {
            ?>
            <script>
                alert("Não existe categoriass cadastradas");
                window.location.replace("index.html");
            </script>
            <?php
        }
        else
        {
            for($i = 1;$i < $numero_resultado; $i++)
            {
                $vetor_categorias = mysqli_fetch_array($resultado_categorias);
                echo"
                <tr>
                    <td>$vetor_categorias[0]</td>
                    <td>$vetor_categorias[1]</td>
                    <td><input type='radio'name='check_categoria' value=$vetor_categorias[0]></td>
                    </tr>
                ";
            }
        }
        ?>
    </table>
    <br><input type="submit" value="Excluir">
    </form>
</body>
</html>