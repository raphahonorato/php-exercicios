<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css" />
    <meta charset="UTF-8">
    <title>Formulários</title>
</head>

<body>
    <div>
        <form method="get" action="mult-form.php">
            <?php
            $c = 1;
            while ($c <= 5) {
                echo "Valor $c:<input type='number' name='v$c' max='100' min='0' value='0'/></br>";
                $c++;
            }
            ?>
            <a href="mult-form.php" class="botao">Enviar</a>
        </form>
    </div>
</body>

</html>