<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Operadores de Atribuição</title>
</head>

<body>
    <?php
    $a = $_GET["a"];
    $b = 20;
    $c = 30;
    echo "O produto vale " . number_format($a, 2);
    $a -= $a * 10 / 100;
    echo "<br/>10% de desconto equivale a " . number_format($a, 2);
    ?>
</body>

</html>