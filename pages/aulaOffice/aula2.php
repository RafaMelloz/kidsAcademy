<?php
include('../../configPainel.php');
/* print_r($_SESSION); */
if (isset($_GET['loggout'])) {
	session_destroy();
	header('Location: ../../pages/login.php');
}


?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Pacote Office</title>
	<link rel="stylesheet" type="text/css" href="../../css/styleAulas.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../../Imagens/favicon.ico" type="image/x-icon">
	<script src="https://kit.fontawesome.com/afc3be874b.js" crossorigin="anonymous"></script>
</head>

<body>

	<header>
		<nav>
			<img src="../..	/imagens/logokids.png" />
			<div class="mobile-menu">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
			<!--mobile-menu-->
			<ul class="nav-list">
				<li><a class="grup" href="../index.php">Campus</a></li>
				<li><a class="grup" href="../perfilAluno.php">Perfil</a></li>
				<li><a class="grup" href="">Certificados</a></li>
				<li><a class="btsair" href="?loggout">Sair</a></li>
			</ul>
		</nav>
		<!--nav-->
	</header>
	<!--header-->
	<script src="../../js/mobile-navbar.js"></script>
	<!--header-->

	<section class="header-membro">
		<div class="text-user">
			<h1 id='perfil'>Bem-vindo, <?php echo $_SESSION['nome_aluno'] ?>!</h1>
			<p>Acesse suas aulas adquiridos e começe ja a estudar :)</p>
		</div>

		<div class="clear"></div>
	</section>
	<!--Hmembro   	voltar dps-->

	<section class="stiky">
		<div class="scroll">
			<div class="box">


				<?php
				$modulos = \MySql::conectar()->prepare("SELECT * FROM `modulos_curso` WHERE curso_id =1");
				$modulos->execute();
				$modulos = $modulos->fetchAll();
				foreach ($modulos as $key => $value) {

				?>
					<div class="box">
						<h2><?php echo $value['nome_modulo'] ?></h2>
						<?php
						$aulas = \MySql::conectar()->prepare("SELECT * FROM `aulas_curso` WHERE modulo_id = $value[id]");
						$aulas->execute();
						$aulas = $aulas->fetchAll();
						foreach ($aulas as $key => $aula) {
							echo '<div><i class="fa-solid fa-play"></i> <a href="' . INCLUDE_PATH . 'pages/aulaOffice/pacoteOfice.php?id=' . $aula['id'] . '">' . $aula['nome_aula'] . '</a></div>';
						}

						?>

						<!--MUDAR-->

					</div>
				<?php } ?>

				<!--scroll-->
	</section>
	<!--stick-->

	<div class="Cprincipal">
		<div class="center">
			<div class="Titulo-Principal">
				<h2>Curso Pacote Office do Básico ao Intermediário</h2>
				<p>Módulo:Introdução e Conceitos > <span>Instalando o Office</span></p>
			</div>
			<!--Titulo-Principal-->

			<div class="A-centro">
				<a href="pacoteOfice.php" style="float: left;">
					<< AULA ANTERIOR</a>
						<a href="aula3.php" style="float: right;">PROXIMA AULA >></a>
			</div>
			<!--A-centro-->


			<iframe width="560" height="315" src="https://www.youtube.com/embed/PuXDJ1i-6Gs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


			<div class="B-centro">
				<h2>Links Úteis</h2>
				<a href="">Lorem ipsun</a>
			</div>
			<!--B-centro-->

		</div>
		<!--center-->
	</div>
	<!--Cprincipal-->

	<div class="clear"></div>

	<footer>
		<div class="footer">

			<div class="footer-icon">
				<ul>
					<li><a href="#" target="black"><img src="../../Imagens/logotipo-do-instagram.png"></a></li>
					<li><a href="#" target="black"><img src="../../Imagens/facebook.png"></a></li>
					<li><a href="#" target="black"><img src="../../Imagens/twitter.png"></a></li>
			</div>
			<div class="footer-nav">
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Sobre nós</a></li>
					<li class="p1"><a href="#">Contato</a></li>


				</ul>
			</div>
			<div class="footer-end">
				<p>Kids Academy</a></p>
			</div>
	</footer>

</body>