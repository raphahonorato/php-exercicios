<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css" />
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div>
        <pre>
        <?php
        $m = array(
            array(2, 3),
            array(4, 5),
            array(6, 7));
            $m[2][0] = $m[0][1];
        print_r($m);
        ?>
        </pre>
        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
    </div>
</body>

</html>