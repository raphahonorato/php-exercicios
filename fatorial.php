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
            $v = isset($_GET["val"]) ? $_GET["val"] : 1;
            echo "<h1>Calculando o fatorial de $v</h1>";
            $c = $v ;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c--;
            }while($c >= 1);
            echo "$v !&nbsp;&nbsp;= $fat &nbsp;&nbsp;&nbsp;&nbsp;";
            ?>
            <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
            <input type="button" value="Voltar" onClick="history.go(-1)" class="botao">
        
    </div>
</body>

</html>