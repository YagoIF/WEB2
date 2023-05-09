<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>

<body>
    <div class="container">
        <h1>Praticando - Calculadora Média</h1>

        <?php

        $n1 = filter_input(INPUT_POST, "n1", FILTER_SANITIZE_SPECIAL_CHARS);
        $n2 = filter_input(INPUT_POST, "n2", FILTER_SANITIZE_EMAIL);
        $n3 = filter_input(INPUT_POST, "n3", FILTER_SANITIZE_SPECIAL_CHARS);

        $i = ($n1 + $n2 + $n3) / 3;

        echo "<p> O aluno com as notas: $n1,$n3,$n3 tem a media igual a:$i</p>";

        if ($i >= 6) {
            echo "com essa media o aluno esta: <span style='color:green;font-weight: bold;'>Aprovado</span>";
        } elseif ($i > 4 && $i < 6) {
            echo "com essa media o aluno esta de <span style='color:orange;font-weight: bold;'>Recuperação</span>";
        } elseif ($i <= 4) {
            echo "com essa media o aluno esta: <span style='color:red;font-weight: bold;'>Reprovado</span>";
        }


        ?>

    </div>
</body>

</html>