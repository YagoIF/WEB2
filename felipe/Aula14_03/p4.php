<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Praticando 4</title>
    <style>
        .botoes {
            padding-top: 1%;
        }
    </style>
</head>

<body>
    <Div class="container">
        <h1>Praticando 4 - Gerador de tabela</h1>

        <?php
        $lin = filter_input(INPUT_GET, "lin", FILTER_SANITIZE_SPECIAL_CHARS);
        $col = filter_input(INPUT_GET, "col", FILTER_SANITIZE_SPECIAL_CHARS);
        $est = filter_input(INPUT_GET, "est", FILTER_SANITIZE_SPECIAL_CHARS);

        if ($lin == "") {
        ?>
            <form class="form-inline" action="p4.php" method="get">

                <div class="row">
                    <div class="col-3 my-2">
                        <label for="lin">Linhas:</label>
                        <input type="text" name="lin" id="lin" class="form-control">
                    </div>

                    <div class="col-3 my-2">
                        <label for="col">Colunas:</label>
                        <input type="text" name="col" id="col" class="form-control">
                    </div>

                    <div class="col-3 my-2">
                        <label for="est">Estilo:</label>
                        <select class="form-select" name="est" id="est">
                            <option value="">Selecione o Estilo</option>
                            <option value="table-primary">table-primary</option>
                            <option value="table-success">table-success</option>
                            <option value="table-danger">table-danger</option>
                            <option value="table-warning">table-warning</option>
                            <option value="table-dark">table-dark</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 my-2"></div>
                    <div class="botoes col-3 my-2">
                        <button type="submit" class="btn btn-success">Gerar Tabela</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>
                    </div>
                </div>
    </div>
    </form>

<?php
        } elseif ($lin) {
            echo "<h3>Tabela $col X $lin</h3>";
            echo "O estilo é $est";

            echo "<table class='table table-bordered'>";
            echo "<tbody>";
            for ($x = 1; $x <= $lin; $x += 1) {
                echo "<tr class='$est'>";
                for ($i = 1; $i <= $col; $i += 1) {
                    echo "<th>-</th>";
                }
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } ?>

<div class="botoes">
    <a type="submit" class="btn btn-success" href="p4.php">Voltar</a>
    <a href="../index.html">Menu Principal</a>
</div>
</Div>

</body>

</html>
