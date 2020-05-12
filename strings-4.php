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
        //$nome = "raphael honorato";
        /*$nome2 = strtolower($nome);
        //echo"Seu nome é " .strtolower($nome);
        echo"Vc se chama tudo minúsculo $nome2";
        $nome3 = strtoupper($nome);
        print "Seu nome todo maiúsculo é $nome3";*/
        //$nome4 = ucfirst(strtolower($nome));
        //$nome4 = ucwords($nome);
        //$nome4 = strrev($nome);
        //$nome4 = strpos($nome, "honorato");
        //print "$nome</br> A string está na posição $nome4";
        //$nome4 = stripos($nome, "Honorato");
        //print "$nome</br> A string está na posição $nome4";
        //$frase = "Estor aprendendo PHP no curso de PHP, porque PHP é muito legal !";
        //$cont = substr_count($frase,"PHP");
        //print$cont;
        //$nome = "Raphael Honorato";
        //$sub = substr($nome,-8,8);
        //print($sub);
        //print(substr($nome,-8,8));
        $nome ="Raphael Honorato Honorato";
        //$novo = str_pad($nome, 30, "#", STR_PAD_BOTH);//posiciona a plavra dentro dos caracteres especificados, nesse caso 30
        //print"$novo";
        //$rep = str_repeat("x_", 10);
        //print"$rep";
        $rep = str_ireplace("honorato", "Silva",$nome);
        echo "$rep";
        ?>

        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
    </div>
</body>

</html>