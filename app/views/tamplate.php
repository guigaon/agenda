<!doctype html>
<html language="pt-br">
	<meta charset="utf-8">
	<thead>
		<title>mjailton</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo URL_BASE . "assets/"?>css/grade.css">
		<link rel="stylesheet" href="<?php echo URL_BASE . "assets/"?>css/style.css">
	</thead>
	<body>

		<?php include "cabecalho.php"?>
		
		<div class="base-geral">
		
	<?php $this->load($view, $viewData);//recebe aqui em baixo, pois a "base" e o "menu" nao mudam ?>
	
		</div>
		
		<footer class="rodape">
			<p>CopyRight - 2018</p>
		</footer>
	</body>
</html>