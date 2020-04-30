<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../aulaPHP/_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Condições de Multiplos Casos</title>
</head>

<body>
  <div>
    <?php
    $n = isset($_GET["num"]) ? $_GET["num"] : 0;
    $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
    switch ($o) {
      case 1:
        $r = $n * 2;
        break;
      case 2:
        $r = $n ^ 3;
        break;
      case 3:
        $r = sqrt($n);
        break;
    }

    echo ("O resultado é $r");
    ?>
    <a href="condicoes-mult.html" class="botao">Voltar</a>
  </div>
</body>

</html>