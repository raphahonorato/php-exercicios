<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css" />
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div>
        <form method="get" action="fatorial.php">
            <?php
            $v = isset($_GET["val"]) ? $_GET["val"] : 1;



            ?>
            <input type="submit" value="Atualizar" class="botao" />
            <input type="button" value="Atualizar" onClick="history.go(0)">
            <input type="button" value="Voltar" onClick="history.go(-1)" class="botao">
        </form>
    </div>
</body>

</html>