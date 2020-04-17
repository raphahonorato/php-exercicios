<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Funções Aritméticas em PHP</title>
</head>

<body>
    <?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h1>Valores recebidos: $v1 e $v2</h1>";
    echo "<br/>O valor absoluto de $v2 é " . abs($v2);
    echo "<br/>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
    echo "<br/>A raiz de $v1 e " . sqrt($v1);
    echo "<br/>O valor de $v2 arredondado é " . round($v2);
    echo "<br/>A parte inteira de $v2 é " . intval($v2);
    echo "<br/>O valor de $v1 em moeda é R$" . number_format($v1,2);
    ?>
</body>

</html>