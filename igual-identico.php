<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
    $a = 1;
    $b = "1";
    $r = $a === $b ? "SIM" : "NÃO";
    echo "As variáveis A e B são idênticas ? $r";

    $c = 2;
    $d = 2;
    $R = $c === $d ? "SIM" : "NÃO";
    echo "<br/>As variáveis C e D são idênticas ? $R";
    ?>
    </div>
</body>

</html>