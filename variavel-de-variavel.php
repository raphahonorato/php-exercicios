<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Variavés de Variáveis</title>
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
    $a = "Raphael";
    $$a = "Honorato";
    echo "O conteúdo da variável A é $a";
    echo "<br/>A variável criada recebeu $Raphael";
    ?>
    </div>
</body>

</html>