<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Games</title>
</head>
<body>
    <form method="post" action="cadastrar_jogo.php"></form>
    <h1>Cadastrar jogos</h1>
    Nome: <input name="c_nome" type="text" size="50" maxlength="50"><br>
    Categoria:<br>
    <select name="categoria_livro">
        <option>Selecione..</option>

       <?php
        require("connect.php");

        $pesquisar_categorias = "SELECT * FROM `categoria`";
        $resultado_categorias = mysqli_query($conexao, $pesquisar_categorias);
        $numero_resultado = mysqli_num_rows($resultado_categorias);

        for($i=0; $i < $numero_resultado; $i++)
        {
            $vetor_categorias = mysqli_fetch_array($resultado_categorias);
            echo "<option value=$vetor_categoria[0]>$vetor_categorias[1]</option>";
        }
        ?>
        </select></p>
        <input type="submit" value=Enviar>
        </form>
</body>
</html>