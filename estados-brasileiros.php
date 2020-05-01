<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../aulaPHP/_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Estados Brasileiros</title>
</head>

<body>
    <div>
        <?php
        $est = isset($_GET["est"]) ? $_GET["est"] : 0;

        switch ($est) {
            case "no":
                $reg ="Norte";
                break;
            case "ne":
                $reg = "Nordeste";
                break;
            case "co":
                $reg = "Centro-Oeste";
                break;
            case "sd":
                $reg = "Sudeste";
                break;
            case "su":
                $reg = "Sul";
                default:
                $reg = "Região inválida";
        }
        echo"Estado da Região <span class = foco>$reg</span>";
        ?>

        </br></br><a href="estados-brasileiros.html" class="botao">Voltar</a>
    </div>

</body>

</html>