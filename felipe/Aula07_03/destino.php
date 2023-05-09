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

        img {
            width: 15%;
            height: 25%;
            padding-right: 5%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Destino</h1>

        <?php
        /*print_r($_POST)*/ ##Mostra tudo que esta no destino

        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<p> Nome informado é: $nome<br>Email: $email</p>";
        ?>

        <p>
            <a href="destino.php?nome=teste&email=teste@email.com">
                Enviar dados [nome = teste / email = teste@email.com]
            </a>
            <br>
            <a href="destino.php?nome=eder&email=eder@email.com">
                Enviar dados [nome = eder / email = eder@email.com]
            </a>
            <br>
            <a href="destino.php">
                Limpar Tudo
            </a>
        </p>

        <p>
            <a href="destino.php?nome=eder&email=eder@email.com&cor=red">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Red_Red.svg/1280px-Red_Red.svg.png" alt="vermelho">
            </a>
            <a href="destino.php?nome=eder&email=eder@email.com&cor=blue">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Solid_blue.svg/480px-Solid_blue.svg.png" alt="azul">
            </a>
            <a href="destino.php?nome=eder&email=eder@email.com&cor=green">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/de/Color-Green.JPG" alt="verde">
            </a>
            <a href="destino.php?nome=eder&email=eder@email.com&cor=white">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEX///+nxBvIAAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC" alt="branco">
            </a>
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