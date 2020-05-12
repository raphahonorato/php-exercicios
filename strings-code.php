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
       /*$letra = chr(100);
       echo "100 é o código de $letra";*/
       
       $letra = "R";
       $cod = ord($letra);
       print $cod;
        ?>

        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
    </div>
</body>

</html>