<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário Nascimento</title>
    <style>
        div {
            font-size: 25px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $nome = isset ($_GET["nome"]) ? $_GET["nome"] : "[NÃO INFORMADO]";
        $ano = isset ($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"] : "[NÃO INFORMADO]";
        $idade = date("Y") - $ano;
        /*"Y" maiusculo considera os 4 digitos, já o "y" minusculo apenas 2 */
        echo"$nome vc tem $idade anos e é $sexo !";
        ?>
        <br/><a href="form-nasc.html">Voltar</a>
    </div>

</body>

</html>