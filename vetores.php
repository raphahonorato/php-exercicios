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
        <table>
        <?php
        /*$n = array(1, 2, 3, 4);
        $n[] = 5;
        print_r($n);
        echo "</br>";

        $valor = array(10 => "oi", 2 => "olá", 3 => "eu", 5 => "vc");
        $valor[] = "XERECA";
        unset($valor[2]);
        print_r($valor);
        /*$k = range(5, 20, 5);
        foreach($k as $valor){
            echo " $valor";
        }*/

        $vetor = array(
            "nome" => "Raphael",
            "idade" => 24,
            "peso" => 69.5
        );
        print_r($vetor);
        $vetor["fuma"] = true;

        foreach ($vetor as $campo => $valor) {
            echo "O valor de $campo é $valor</br>";
        }
        ?>
        </table>
        </pre>
        <input type="button" value="Atualizar" onClick="history.go(0)" class="botao">
    </div>
</body>

</html>