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
        function teste(&$x){
            $x = $x + 1;
            echo "O valor de X é $x</br>";
        }
        $a = 3;
        teste($a);
        echo "O valor de A é $a";
        ?>

        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">

        <input type="button" value="Voltar" onClick="history.go(-1)" class="botao">

    </div>
</body>

</html>