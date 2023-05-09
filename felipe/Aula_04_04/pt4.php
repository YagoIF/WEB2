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

    <form action="destino.php" method="post">

        <div class="row">
            <div class="col-5">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="col-5">
                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <label for="msg">Mensagem</label>
                <textarea name="msg" id="msg" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>

        <div class="botoes">
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </div>
    </form>
</div>

<?php
require "footer.php";
?>
