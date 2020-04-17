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
            text-align: center;

        }
    </style>
</head>

<body>
    <div>
        <?php
        $ano = $_GET["an"];
        $idade = 2020 - $ano;
        echo "Você nasceu em $ano então tem $idade anos";
        $tipo = ($idade >= 18 && $idade < 65) ? "Vc vota" : "Vc não é obrigado a votar !";
        echo "<br/>$tipo";

        ?>
    </div>
</body>

</html>