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
        function soma ($a, $b)
        { 
            return $a + $b;;
        }
        $c = 3;
        $d = 4;
        $r = soma($c , $d);
        echo"A soma entre $c e $d é igual a $r";
        ?>

        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">

        <input type="button" value="Voltar" onClick="history.go(-1)" class="botao">

    </div>
</body>

</html>