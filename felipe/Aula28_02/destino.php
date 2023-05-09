<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>

    <style>
        body {
            padding-left: 5%;
            padding-top: 2%;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Destino</h1>

        <?php
        /*print_r($_POST)*/ ##Mostra tudo que esta no destino

        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<p> Nome informado é: $nome<br>Email: $email</p>";
        ?>

        <p>
            <a href="form.php">Voltar ao formulario</a>
        </p>

        <style>
            body {
                background-color: <?php echo $cor; ?>;
            }
        </style>
    </div>
</body>
    <a href="../index.html">Menu Principal</a>
</html>