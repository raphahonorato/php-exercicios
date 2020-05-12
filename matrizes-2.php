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
        /*$v = array("R","A","P","H","A","E","L");
        print_r($v);
        //$v[] = "H"; //ACRESCENTA NA ULTIMA POSIÇÃO
        //array_push($v,"H"); ACRESCENTA NO FINAL
        //array_pop($v); REMOVE NA ULTIMA POSIÇÃO
        //array_unshift($v,"H");ACRESCENTA NA PRIMEIRA POSIÇÃO REORGANIZANDO AUTOMATICAMENTE
        //array_shift($v);//REMOVE O PRIMEIRO ELEMENTO
        echo"</br>";
        sort($v);*/
        $num = array(10,5,15);
        //sort($num); ORDEM CRESCENTE
        //rsort($num);ORDEM DECRESCENTE / REVERSO
        //asort($num); ORDEM CRESCENTE E OS INDICES ACOMPANHAM A MUDANÇA TBM
        //arsort($num);//ORDEM DECRESCENTE E OS INDICES TBM ACOMPANHAM A MUDANÇA / REVERSO
        //ksort($num);//ORGANIZA AS KEYS/CHAVES/INDICES EM ORDEM CRESCENTE E OS VALORES ACOMPANHAM
        krsort($num);//MESMA COISA SÓ QUE AO CONTRARIO/DECRESCENTE
        print_r($num);
        
        //print_r($v);
        ?>
        </pre>
        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
    </div>
</body>

</html>