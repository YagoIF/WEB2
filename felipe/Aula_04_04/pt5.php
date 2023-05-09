<html lang="pt-br">

<?php
require "header.php";
?>

    <div class="container">

        <?php
        require "menu.php";
        ?>

        <div class="inicio">
            <div class="bg-light p-4 mb-4 rounded">
                <h1 class="text-center">Autenticação</h1>
            </div>

</head>

<body>

    <form action="destino.php" method="POST">

        <div class="row">
            <div class="col-3 my-2">
                <label for="name">Usuario</label>
                <input type="text" id="nome" name="nome" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3 my-2">
                <label for="mail">Senha</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3 my-3">
                <input type="submit" class="btn btn-primary" value="Enviar">
                <input type="submit" class="btn btn-warning" value="Limpar">
            </div>
        </div>

    </form>
</body>
<?php
    require "footer.php";
    ?>

</html>