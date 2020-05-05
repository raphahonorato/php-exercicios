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
        $c = 20;
        do {
            echo "$c ";
            $c--;
        } while ($c >=5);
        ?>
        <a href="contador.html" class="botao">Voltar</a>
    </div>
</body>

</html>