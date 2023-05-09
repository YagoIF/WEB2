<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Ativ28_02/index.css">
    <title>Praticando</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            padding: 10px;
        }

        .grid-item {
            padding: 3%;
            font-size: 30px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Praticando - Animais</h1>
    <?php
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($nome == "") { ?>

        <div class="grid-container">

            <div class="grid-item">
                <a href="p2.php?nome=cachorro">
                    <img src="cachorro.jpg" alt="Cachorro" style="width: auto;height: 25%;">
                </a>
            </div>

            <div class="grid-item">
                <a href="p2.php?nome=gato">
                    <img src="gato.jpg" alt="Gato" style="width: auto;height: 25%;">
                </a>
            </div>

            <div class="grid-item">
                <a href="p2.php?nome=gamba">
                    <img src="gamba.jpeg" alt="Gambá" style="width: auto;height: 25%;">
                </a>
            </div>

            <div class="grid-item">
                <a href="p2.php?nome=urso-panda">
                    <img src="urso-panda.jpg" alt="Urso Panda" style="width: auto;height: 25%;">
                </a>
            </div>
        </div>
    <?php
    } elseif ($nome == "cachorro") {
        echo "<p>  Um mamífero carnívoro da família dos canídeos, subespécie do lobo,
             e talvez o mais antigo animal domesticado pelo ser humano..</p>"; ?>
        <p>
            <a href="p2.php?nome=cachorro">
                <img src="cachorro.jpg" alt="Cachorro" style="width: auto;height: 70%;">
            </a>
            <br>
            <a href="p2.php">
                Voltar ao inicio
            </a>
        </p>
    <?php
    } elseif ($nome == "gato") {
        echo "<p> um mamífero carnívoro da família dos felídeos, muito popular como animal de estimação. 
                Ocupando o topo da cadeia alimentar, é predador natural de diversos animais, como roedores, 
                pássaros, lagartixas e alguns insetos.</p>"; ?>
        <p>
            <a href="p2.php?nome=gato">
                <img src="gato.jpg" alt="Gato" style="width: auto;height: 70%;">
            </a>
            <br>
            <a href="p2.php">
                Voltar ao inicio
            </a>
        </p>
    <?php
    } elseif ($nome == "gamba") {
        echo "<p> Você clicou no <strong>Gambá</strong>.<br>O gambá-de-orelha-preta, 
        também conhecido como saruê, sariguê, micurê, mucura, e timbu é uma espécie
         de gambá que habita o Brasil, Argentina e Paraguai.</p>"; ?>
        <p>
            <a href="p2.php?nome=gamba">
                <img src="gamba.jpeg" alt="Gambá" style="width: auto;height: 70%;">
            </a>
            <br>
            <a href="p2.php">
                Voltar ao inicio
            </a>
        </p>

    <?php
    } elseif ($nome == "urso-panda") {
        echo "<p> O panda-gigante é um mamífero omnívoro da família Ursidae endêmico da República Popular da China.</p>"; ?>
        <p>
            <a href="p2.php?nome=urso-panda">
                <img src="urso-panda.jpg" alt="Uroso-Panda" style="width: auto;height: 70%;">
            </a>
            <br>
            <a href="p2.php">
                Voltar ao inicio
            </a>
        </p>

    <?php
    }
    ?>

</body>
    <a href="../index.html">Menu Principal</a>
</html>