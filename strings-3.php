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
        /*$r = wordwrap($t, 5,"</br>\n",true);
        echo $r;
        echo (strlen($nome));
        $novo = trim($nome);
        $novo = rtrim($nome);
        $nome = "       Raphael Honorato e Silva            ";
        $cont = str_word_count($nome,2);
        print_r($cont);*/

        $nome = "Raphael";
        /*$vetor = explode(" ",$nome);
        print_r($vetor); 
        $vetor = str_split($nome);
        print_r($vetor);*/
        $vetor[1] = "Raphael";
        $vetor[2] = "Honorato";
        $vetor[3] = "e";
        $vetor[4] = "Silva";
        $nome = implode("#", $vetor);//$nome = join("#", $vetor);  --> funciona da mesma forma que o implode
        print($nome);
        ?>

        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
    </div>
</body>

</html>