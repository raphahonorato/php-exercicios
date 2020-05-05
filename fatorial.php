<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css" />
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div>
        <?php
        $n = $_GET['val'];
        $n2 = $n1;
        $tot = 0;

        while ($n >= 1) {
            $n2 = $n2 - 1;
            $tot = $n2 * $n2;
            $n--;
            echo "$tot <br>";
        }
        ?>
        </form>
    </div>
</body>

//

<?php

    
    
        $v = isset($_GET["val"]) ? $_GET["val"] : 1;
        echo "<h1>Calculando o fatorial de $v </h1>";
        $c = $v;
        $fat = 1;
        do {
            $fat= $fat * $c;
            $c-= 1;
        }while ($c >=1);
        echo $c;
        ?>

        <a href="fatorial.html" class="botao">Voltar</a>
*/
 ?>       
//
</html>