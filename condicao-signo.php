<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Condição para Votos</title>
    <style>
        div {
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: black;

        }
    </style>
</head>

<body>
    <div>
        <?php
            $ano = $_GET["an"];
            $idade = 2020 - $ano;
            $mes = $_GET["ms"];
            echo"Você nasceu em $ano então tem $idade anos";
            $sig = ($mes="marco") ? "Vc é ariano !" : "Vc não é brabo";
            echo "<br/>$sig";
        ?>
    </div>
</body>

</html>