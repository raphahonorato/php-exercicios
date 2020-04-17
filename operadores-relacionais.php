<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Operadores Relacionais</title>
    <style>
        div {
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: black;

        }
    </style>
</head>

<body>
    <div>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores foram $n1 e $n2<br/>";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        /*São parecidos com if e else, se e senão, mas por simbologia */
        echo "O resultado será $r"
        ?>
    </div>
</body>

</html>