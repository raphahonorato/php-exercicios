<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Primeiro Formulário em PHP</title>
    <style>
        div {
            font-size: 25px;
            font-weight: bold;
            color: white;
            background-color: black;

        }
    </style>
</head>

<body>
    <div>
        <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz quadrada de $valor é " . number_format($rq, 2);
        ?>
        <a href="form.html">Voltar</a>
    </div>

</body>

</html>