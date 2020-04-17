<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Incrementos 2</title>
</head>
<body>
    <?php
    $a = 3;
    $b = &$a;
    $b += 10;
    echo"A variável A vale $a";
    echo "<br/>A variável B vale $b";
    ?>
</body>
</html>