<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "Vc nasceu em $a e terá $i anos <br/>";
        if ($i < 16) {
            $tipoVoto = "Não vota";
        } elseif ($i >= 16 && $i < 18) {
            $tipoVoto = "Voto Opcional";
        } else {
            $tipoVoto = "Voto Obrigatório";
        }
        if ($i > 65) {
            $tipoVoto = "Velho demais, vota se quiser";
        }
        echo "Para essa idade $tipoVoto";
        ?>
    </div>
</body>

</html>