<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css" />
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div>
        <form method="get" action="repeticao-for.php">
            <h2>Tabuada Básica</h2></br>
            Valor &rarr; <select name="tab">
                <?php
                for ($c = 1; $c <= 10; $c++) {
                    echo "<option>$c</option>";
                }
                ?>
            </select>
            <input type="submit" value="Enviar" class="botao" />
        </form>
    </div>
</body>

</html>