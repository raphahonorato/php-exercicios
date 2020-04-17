<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Incrementos</title>
</head>

<body>
    <?php
    /*o _GET faz a interação com o usuário */

    $atual = $_GET["aa"];
    echo "O ano atual é $atual e o anterior é " . $atual--;
    echo "<br/>" . $atual;

    /*++a faz o incremento antes
      a++ faz o incremento depois*/
    ?>
</body>

</html>