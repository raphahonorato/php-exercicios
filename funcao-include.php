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
        include "inclu-func.php";
        echo "<h1>Testando INCLUDES</h1>";
        ola();
        mostraValor(5);
        echo "Finalizando !</br>";
        ?>

        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
    </div>
</body>

</html>