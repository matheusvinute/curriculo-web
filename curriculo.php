<?php

$nome = 'Matheus Vinute';
$profissao = 'Analista de Sistemas';
$especialidade = 'Programador PHP';
$contato = ['Facebook' => 'facebook.com/vinutematheus', 'Github' => 'github.com/matheusvinute', 'Site' => 'negociosesoftware.com.br'];
$formacao = [['curso' => 'Analise de Sistemas', 'instituicao' => 'Unopar', 'inicio' => 2016, 'termino' => 2019],        ['curso' => 'Programação', 'instituicao' => 'TimTec', 'inicio' => 2019, 'termino' => false]];
$experiencia = [['empresa' => 'ProgreTec', 'inicio' => 2018, 'termino' => false, 'cargo' => 'Analista'],['empresa' => 'ProgreTec', 'inicio' => 2018, 'termino' => false, 'cargo' => 'Analista']];
$portfolio = [['projeto' => 'Calculadora de Medias Escolares', 'data' => 2020],['projeto' => 'Calculadora de Medias Escolares', 'data' => 2020]];
$proficiencia = ['html' => 100, 'css' => 70, 'js' => 60, 'php' => 80];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?= $nome ?></title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="row"><!--para colocar tudo lado a lado -->
	<div class="container"> <!-- estilisação bootstrap -->
	<div class="jumbotron"> <!-- estilisação bootstrap -->
	<h1><?= $nome ?></h1>
	<p><?= $profissao . ' &mdash; ' . $especialidade ?></p>
	</div> <!-- /jumbotron -->

	<div class="col-sm-12 coll-md-4">
	<div class="jumbotron clearfix">
	<h2>Contato</h2>
	<div class="pull-center">
		<?php foreach($contato as $canal => $url): ?>
			<a class="btn btn-lg btn-primary" href="<?= $url ?>"><?= $canal ?></a>
		<?php endforeach; ?>
	</div>
	</div>
	</div>
    

	<div class="col-sm-6 coll-md-4">
	<div class="jumbotron clearfix">
	<h2>Formação</h2>
	<?php foreach($formacao as $curso): ?>
		<h3><?= $curso['instituicao'] ?></h3>
		<span class="small">
		<p><?= $curso['inicio'] . ' &mdash; ' . $curso['termino'] . ' ' . $curso['curso'] ?></p>
		</span>
	<?php endforeach; ?>
    </div>
    </div>

	<div class="col-sm-6 coll-md-4">
	<div class="jumbotron clearfix">
	<h2>Experiencia</h2>
	<?php foreach($experiencia as $proj): ?>
		<h3><?= $proj['cargo'] ?></h3>
		<?php if(! $proj['termino']){ $proj['termino'] = 'Atual';} ?>
		<span class="small">
		<p><?= 'Cargo Ocupado de' . $proj['cargo'] . ' ' . $proj['inicio'] . '&mdash;' . $proj['termino'] ?></p>
	    </span>
	<?php endforeach; ?>
    </div>
    </div>

	<div class="col-sm-6 coll-md-4">
	<div class="jumbotron clearfix">
	<h2>PortFolio</h2>
	<?php foreach($portfolio as $item): ?>
		<span class="small">
		<p><?= $item['projeto'] . ' &mdash; ' . $item['data'] ?></p>
	    </span>
	<?php endforeach; ?>
    </div>
    </div>

	<div class="col-sm-6 coll-md-4">
	<div class="jumbotron clearfix">
	<h2>Proficiencias</h2>
	<?php foreach ($proficiencia as $habilidade => $valor): ?>
		<div class="progress">
			<div class="progress-bar" style="width: <?= $valor ?>%">
			<?= $habilidade?>
			</div>
		</div>
	<?php endforeach; ?>
    </div>
	</div><!--container -->
	</div>
    </div><!--row-->
</body>
</html>
