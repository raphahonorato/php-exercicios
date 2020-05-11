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
        function soma($a, $b){
            $s = $a + $b;
            echo "A soma vale $s</br>";
        }
        soma(3, 4);
        soma(1, 2);
        $c = 5;
        $d = 10;
        soma($c, $d);
        ?>
        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
        <input type="button" value="Voltar" onClick="history.go(-1)" class="botao">

    </div>
</body>

</html>