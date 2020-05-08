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
            $n = isset($_GET["val"]) ? $_GET["val"] : 1;
            echo "<h1>Mostrando a Tabuada de $n </h1>";
	   for ($c = 1; $c <= 10; $c++) {
		 $r = $n * $c;
		 echo "$n x $c = $r <br/>";
	   }
            ?>
            <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
            <input type="button" value="Voltar" onClick="history.go(-1)" class="botao">
        
    </div>
</body>

</html>