<?php
require "header.php";
?>

<div class="container">

    <?php
    require "menu.php";
    ?>

    <div class="inicio">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Formulário para contato</h1>
        </div>
    </div>

    <?php
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<b>Nome informado:</b> $nome<br><br>";
    echo "<b>Email:</b> $email<br><br>";
    echo "<b>Mensagem:</b> $msg<br>";
    echo "<p>Data:";
    date('d/m/Y - h:i:s');
    echo "</p>";
    ?>

    <div class="botoes">
        <a type="button" class="btn btn-primary" href="p4.php">Voltar</a>
    </div>
</div>

<?php
require "footer.php";
?>