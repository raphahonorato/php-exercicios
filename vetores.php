<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css" />
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div>

        <pre>
        <table>
        <?php
        $n = array(1, 2, 3, 4);
        $n[] = 5;
        print_r($n);
        echo "</br>";

        $valor = array(10 => "PAU", 2 => "BUCETA", 3 => "CÚ", 5 => "GRELO");
        $valor[] = "XERECA";
        unset($valor[2]);
        print_r($valor);
        /*$k = range(5, 20, 5);
        foreach($k as $valor){
            echo " $valor";
        }*/
        ?>
        </table>
        </pre>
        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
    </div>
</body>

</html>