<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Condição</title>
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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2)/2;
        $aluno = "Raphael";
        echo "A média do $aluno é $m <br/>";
        $sit = ($m<6) ? "Não foi suficiente" : "Esse mlq foi APROVADO";
        echo $sit;
    ?>
    </div>
</body>
</html>