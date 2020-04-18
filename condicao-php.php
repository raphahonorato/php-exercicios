<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
            $a = isset ($_GET["ano"]) ? $_GET["ano"] : 1900;
            $i = date("Y") - $a;
            echo "Vc nasceu em $a e terá $i anos <br/>";
            if($i >= 18){
                $v = "já pode votar";
                $d = "já pode dirigir";
            }
            else{
                $v="não pode votar";
                $d ="não pode dirigir";
            }
            echo "Com essa idade vc $v e também $d !";
        ?>
    </div>
</body>

</html>