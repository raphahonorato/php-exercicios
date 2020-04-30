<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../aulaPHP/_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Dias da Semana</title>
</head>

<body>
  <div>
    <?php
    $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;
    switch ($d) {
      case 2:
      case 3:
      case 4:
      case 5:
      case 6:
        echo "Vai estudar";
      break;
      case 7:
      case 8:
      echo "Dia de descanso";
      break;
      default:
      echo "Dia inválido";
    }
    ?>
    <a href="dia-semana.html" class="botao">Voltar</a>
  </div>
</body>

</html>