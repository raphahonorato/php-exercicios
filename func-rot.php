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
        function soma(){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for($i = 0; $i < $t; $i++){
                $s = $s +$p[$i];
            }
            return $s;
        }
        
        $r = soma(1,1,1,1,1,1,1,1,1,1);
        echo "A soma vale $r";
        ?>

        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">

        <input type="button" value="Voltar" onClick="history.go(-1)" class="botao">

    </div>
</body>

</html>