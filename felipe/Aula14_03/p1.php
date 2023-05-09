<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Praticando 1</title>
    <style>
        h1 {
            border-bottom: solid 1px gray;
            padding-bottom: 1%;
            margin-bottom: 2%;
        }

        .botoes {
            padding-top: 1%;
        }

        .tabuada {
            padding-left: 1%;
        }

        .tabuada2 {
            padding-left: 4%;
        }
    </style>
</head>

<body>
    <h1>Praticando 1 - Tabuada</h1>
    <div class="tabuada">
        <?php
        $n = filter_input(INPUT_GET, "n", FILTER_SANITIZE_SPECIAL_CHARS);

        if ($n == "") { ?>

            <p>Selecione um número para calcular a tabuada.</p>

            <form action="p1.php" method="get">
                <div class="form-body">
                    <div>
                        <label for="n">Número</label>
                        <input type="text" name="n" id="n">
                    </div>

                    <div class="botoes">
                        <button type="submit" class="btn btn-success">Calcular</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>
                    </div>
                </div>
            </form>

        <?php
        } elseif ($n) {
        ?>

            <?php
            echo "<h2> Tabuada do <b>$n</b></h2>";
            echo "<br>";

            echo "<div class='tabuada2'>";
            for ($i = 0; $i <= 10; $i++) {

                $calc = $i * $n;
                echo "<p>$i x $n = $calc</p>";
            }
            ?>

    </div>
    <a type="submit" class="btn btn-success" href="p1.php">Outro número</a>

<?php
        }

?>
<a href="../index.html">Menu Principal</a>

</body>

</html>
