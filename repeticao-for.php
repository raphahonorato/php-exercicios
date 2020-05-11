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
            $t = isset($_GET["tab"]) ? $_GET["tab"] : 1;
            for($c =1; $c <= 10; $c++){
                $r = $t * $c;
            echo"$t x $c = $r</br>";
            }
            ?>
            <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
            <input type="button" value="Voltar" onClick="history.go(-1)" class="botao">
    </div>
</body>

</html>