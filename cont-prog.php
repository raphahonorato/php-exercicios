<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css" />
    <meta charset="UTF-8">
    <title>Contagem Progressiva</title>
</head>

<body>
    <div>
        <?php
        $c = 100;
        while ($c >= 1) {
            echo $c . "</br></br>";
            $c-= 5;
        }
        
        ?>
        <a href="cont-prog.html" class="botao">Voltar</a>
    </div>
</body>

</html>