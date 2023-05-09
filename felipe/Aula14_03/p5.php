<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Praticando 5</title>
	<style>
		h1 {
			border-bottom: solid 1px gray;
			padding-bottom: 1%;
			margin-bottom: 2%;
		}

		.botoes {
			padding-top: 1%;
			padding-left: 3%;
		}

		.grid-container {
			display: grid;
			grid-template-columns: auto auto auto;
			padding: 10px;
		}

		.grid-item {
			padding: 20px;
			text-align: center;
		}
	</style>
</head>

<body>
	<h1>Praticando 5 - Formulario</h1>

	<form action="destino.php" method="post">
		<div class="grid-container">

			<div class="grid-item">
			<input type="checkbox" name="Esportes[]" value="Esportes">
				<label for="Esportes">Esportes</label>
			</div>

			<div class="grid-item">
				<input type="checkbox" name="Tecnologia[]" value="Tecnologia">
				<label for="Tecnologia">Tecnologia</label>
			</div>

			<div class="grid-item">
				<input type="checkbox" name="Games[]" value="Games">
				<label for="Games">Games</label>
			</div>

			<div class="grid-item">
				<input type="checkbox" name="Musicas[]" value="Musicas">
				<label for="Musicas">Musicas</label>
			</div>

			<div class="grid-item">
				<input type="checkbox" name="Series[]" value="Series">
				<label for="Series">Series</label>
			</div>

			<div class="grid-item">
				<input type="checkbox" name="Cultura[]" value="Cultura">
				<label for="Cultura">Cultura</label>
			</div>

			<div class="grid-item">
				<input type="checkbox" name="Politica[]" value="Politica">
				<label for="Politica">Politica</label>
			</div>

			<div class="grid-item">
				<input type="checkbox" name="Comida[]" value="Comida">
				<label for="Comida">Comida</label>
			</div>

			<div class="grid-item">
				<input type="checkbox" name="Vestuario[]" value="Vestuario">
				<label for="Vestuario">Vestuario</label>
			</div>

			<div class="grid-item">
				<input type="checkbox" name="Moveis[]" value="Moveis">
				<label for="Moveis">Moveis</label>
			</div>

			<div class="grid-item">
				<input type="checkbox" name="Animais[]" value="Animais">
				<label for="Animais">Animais</label>
			</div>

			<div class="grid-item">
				<input type="checkbox" name="Plantas[]" value="Plantas">
				<label for="Plantas">Plantas</label>
			</div>
		</div>

		<div class="botoes">
			<button type="submit" class="btn btn-success" id="chgeckboxes">Enviar</button>
			<button type="reset" class="btn btn-warning">Limpar</button>
			<a href="../index.html">Menu Principal</a>
		</div>
	</form>
</body>

</html>