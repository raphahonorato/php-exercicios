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
        $v[0] = 1;
        $v[1] = 2;
        $v[2] = 3;
        //print_r($v);
        $v2 = array(4,5,6,7,8,9);
        //var_dump($v2);
        var_export($v2);
        ?>

        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
    </div>
</body>

</html>