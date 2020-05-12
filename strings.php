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
        $prod = "leite";
        $prec = 4.5;
        $num = 2;
        $r = $prec + $num;
        echo"O $prod custa " . number_format($prec,2);
        printf("</br>O %s custa R$ %.2f</br>", $prod, $prec);
        printf("%.2f + %.2f = %.2f", $prec , $num, $r);
        ?>

        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
    </div>
</body>

</html>