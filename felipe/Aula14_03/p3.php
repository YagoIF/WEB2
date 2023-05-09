<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Praticando 3</title>
    <style>
        h1 {
            border-bottom: solid 1px gray;
            padding-bottom: 1%;
            margin-bottom: 2%;
        }

        a {
            padding-right: 1%;
        }

        .contein {
            padding-left: 1%;
        }

        .botoes {
            padding-top: 1%;
        }

        .primo {
            border: green solid 2px;
            background-color: lightgreen;
            padding: 5px;

        }

        .no {
            border: red solid 2px;
            background-color: lightcoral;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Praticando 3 - Números Primos</h1>
    <div class="contein">
        <a href="p3.php?n=1">Número 1</a>
        <a href="p3.php?n=2">Número 2</a>
        <a href="p3.php?n=3">Número 3</a>
        <a href="p3.php?n=5">Número 5</a>
        <a href="p3.php?n=20">Número 20</a>
        <a href="p3.php?n=32">Número 32</a>
        <a href="p3.php?n=37">Número 37</a>

        <br>

        <?php

        $n = filter_input(INPUT_GET, "n", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "<p> Nome informado é: $n</p>";

        if ($n) {
            $divisores = 0;
            for ($i = 2; $i < $n; $i++) {

                if ($n % $i == 0) {
                    $divisores++;
                }
            }

            if ($divisores == 0) {
                echo "<p>O número <span class='primo'>$n</span> <span class='primo'>é</span> um número <span class='primo'>primo</span>.";

                if ($n % 2 == 0) {
                    echo " Além disso ele é um número <span class='primo'>Par<span>!</p>";
                } else  echo " Além disso ele é um número <span class='primo'>Impar<span>!</p>";
            } else {
                echo "<p>O número <span class='no'>$n</span> <span class='no'>não é</span> um número <span class='no'>primo</span>.";

                if ($n % 2 == 0) {
                    echo " Além disso ele é um número <span class='no'>Par<span>!</p>";
                } else  echo " Além disso ele é um número <span class='no'>Impar<span>!</p>";
            }
        } else echo "<p>Selecione um número!</p>"
        ?>

        <div class="botoes">
            <a type="submit" class="btn btn-success" href="p3.php">Voltar</a>
            <a href="../index.html">Menu Principal</a>
        </div>
    </div>
</body>

</html>
