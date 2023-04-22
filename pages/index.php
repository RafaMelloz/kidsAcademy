<?php
include('../configPainel.php');
/* print_r($_SESSION); */
if (isset($_GET['loggout'])) {
	session_start();
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header('Location: ../pages/login.php');
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/StyleHome.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
	<script src="https://kit.fontawesome.com/afc3be874b.js" crossorigin="anonymous"></script>
	<title>Campus</title>
</head>

<body>
	<header>
		<nav>
			<img src="../imagens/logokids.png" />
			<div class="mobile-menu">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
			<!--mobile-menu-->
			<ul class="nav-list">
				<li><a class="grup" href="index.php">Campus</a></li>
				<li><a class="grup" href="perfilAluno.php">Perfil</a></li>
				<li><a class="grup" href="">Certificados</a></li>
				<li><a class="btsair" href="?loggout">Sair</a></li>
			</ul>
		</nav>
		<!--nav-->
	</header>
	<!--header-->
	<script src="../js/mobile-navbar.js"></script>

	<section class="bem-vindo">
		<div class="center">

			<div class="home-box-usuario">

				<?php
				if ($_SESSION['imagem_aluno'] == '') {
				?>
					<div class="home-avatar-usuario">
						<i class="fa-solid fa-user"></i>
					</div>
					<!--avatar-usuario-->
				<?php } else { ?>
					<div class="home-imagem-usuario">
						<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['imagem_aluno']; ?>" />
					</div>
					<!--avatar-usuario-->
				<?php } ?>
			</div>
			<!--box_usuario-->

			<div class="text-user">
				<h1 id='perfil'>Bem-vindo, <?php echo $_SESSION['nome_aluno'] ?>!</h1>
				<p>Acesse seus Cursos adquiridos e começe ja a estudar :)</p>
			</div>

			<div class="clear"></div>
		</div>
	</section>

	<div class="campus">
		<div id="center2">
			<div id="meus_cursos">
				<h2><i class="fa-solid fa-laptop-code">
						<spam> Meus cursos</spam>
					</i></h2>

			</div>
			<main class="cards">

				<?php
				if (\homeModel::hasCursobyId($_SESSION['id_aluno'])) {
				?>
					<section class="card office">
						<div class="icon">
							<img src="../Imagens/office.svg">
						</div>
						<h3>Pacote Office</h3>
						<span></span>
						<a href="aulaOffice/pacoteOfice.php"><button>ACESSAR CURSO</button></a>
					</section>

				<?php } else { ?>

					<section class="card office off">
						<div class="icon">
							<img src="../Imagens/office.svg">
						</div>
						<h3>Pacote Office</h3>
						<span></span>
						<form method="post">
							<input class="compra-botao" type="submit" name="compra_office" value="ADQUIRIR CURSOS">
						</form>
					</section>
				<?php } ?>

				<?php
				if (isset($_POST['compra_office'])) {
					\MySql::conectar()->exec("INSERT INTO `controlecurso` VALUES (null,$_SESSION[id_aluno],'1')");
					header('Location: ../pages/index.php');
				}
				?>

				<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


				<?php
				if (\homeModel::hasCursobyIdh($_SESSION['id_aluno'])) {
				?>
					<section class="card html">
						<div class="icon">
							<img src="../Imagens/html.svg">
						</div>
						<h3>HTML e CSS</h3>
						<span></span>
						<a href="aulaHtml/pacoteHtml.php"><button>ACESSAR CURSO</button></a>
					</section>

				<?php } else { ?>

					<section class=" card html off">
						<div class="icon">
							<img src="../Imagens/html.svg">
						</div>
						<h3>HTML e CSS</h3>
						<span></span>
						<form method="post">
							<input class="compra-botao" type="submit" name="compra_html" value="ADQUIRIR CURSOS">
						</form>
					</section>
				<?php } ?>


				<?php
				if (isset($_POST['compra_html'])) {
					\MySql::conectar()->exec("INSERT INTO `controlecurso` VALUES (null,$_SESSION[id_aluno],'2')");
					header('Location: ../pages/index.php');
				}
				?>


				<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


				<?php
				if (\homeModel::hasCursobyIdj($_SESSION['id_aluno'])) {
				?>
					<section class=" card java">
						<div class="icon">
							<img src="../Imagens/java.svg">
						</div>
						<h3>Java</h3>
						<span></span>
						<a href="aulaJava/pacoteJava.php"><button>ACESSAR CURSO</button></a>
					</section>

				<?php } else { ?>

					<section class="card java off">
						<div class="icon">
							<img src="../Imagens/java.svg">
						</div>
						<h3>Java</h3>
						<span></span>
						<form method="post">
							<input class="compra-botao" type="submit" name="compra_java" value="ADQUIRIR CURSOS">
						</form>
					</section>
				<?php } ?>

				<?php
				if (isset($_POST['compra_java'])) {
					\MySql::conectar()->exec("INSERT INTO `controlecurso` VALUES (null,$_SESSION[id_aluno],'3')");
					header('Location: ../pages/index.php');
				}
				?>


			</main>
			<div id="meus_cursos_fotter"></div>
		</div>
		<!--cards2-->
		<div class="clear"></div>
	</div>


	<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


	<footer>
		<div class="footer">

			<div class="footer-icon">
				<ul>
					<li><a href="#" target="black"><img src="../Imagens/logotipo-do-instagram.png"></i></a></li>
					<li><a href="#" target="black"><img src="../Imagens/facebook.png"></i></a></li>
					<li><a href="#" target="black"><img src="../Imagens/twitter.png"></i></a></li>
				</ul>
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

</html>