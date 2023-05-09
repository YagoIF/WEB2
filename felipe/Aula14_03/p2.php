<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Praticando 2</title>
    <style>
        h1 {
            border-bottom: solid 1px gray;
            padding-bottom: 1%;
            margin-bottom: 2%;
        }

        .botoes {
            padding-top: 1%;
        }

        .contein {
            padding-left: 4%;
        }
    </style>
</head>

<body>
    <h1>Contador</h1>
    <div class="contein">
        <h2>Parametros Informados:</h2>

        <?php
        $ini = filter_input(INPUT_POST, "ini", FILTER_SANITIZE_SPECIAL_CHARS);
        $fim = filter_input(INPUT_POST, "fim", FILTER_SANITIZE_SPECIAL_CHARS);
        $inc = filter_input(INPUT_POST, "inc", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<p>Inicio: $ini</p>";
        echo "<p>Final: $fim</p>";
        echo "<p>Incremento: $inc</p>";

        if ($ini < $fim) {
            for ($x = $ini; $x <= $fim; $x += $inc) {
                echo " $x ";
            }
        } elseif ($ini > $fim) {
            for ($x = $ini; $x >= $fim; $x -= $inc) {
                echo " $x ";
            }
        }
        ?>
        <br>
        <br>
        <a type="submit" class="btn btn-success" href="p2.html">Voltar Pagina anterior</a>
        <br><br>
        <a href="../index.html">Menu Principal</a>
    </div>
</body>

</html>
