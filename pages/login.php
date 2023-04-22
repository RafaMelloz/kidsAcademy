<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/StyleLogin.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				<li><a class="grup" href="../index.php">Home</a></li>
				<li><a class="grup" href="Cursos.html">Cursos</a></li>
				<li><a class="btnL2" href="login.php">Entrar</a></li>
				<li><a class="btnL3" href="cadastro.php">Cadastre-se</a></li>
			</ul>
		</nav>
		<!--nav-->
	</header>
	<!--header-->
	<script src="../js/mobile-navbar.js"></script>
	<!--header-->

	<section class="back">
		<div class="Text">
			<h1>Faça seu Login!</h1>
		</div>
		<!--text-->

		<form action="../classes/testeLogin.php" method="POST">
			<div class="login">
				<div class="inputs">
					<p>E-mail*</p>
					<input type="email" placeholder="E-mail" name="email" required>

					<p>Senha*</p>
					<input type="password" placeholder="Senha" name="senha" required>
				</div>
				<!--inputs-->

				<div class="submit">
					<input type="submit" name="submit" value="Entrar">
				</div>
				<!--submit-->

				<div clear></div>
				<div class="Forgive">
					<a href="EsquecerSenha.html">Esqueci minha senha</a>
				</div>
		</form>
		</div>
		<!--login-->
	</section>
	<!--back-->

	<div class="clear"></div>

	<footer>
		<div class="footer">

			<div class="footer-icon">
				<ul>
					<li><a href="#" target="black"><img src="../Imagens/logotipo-do-instagram.png"></i></a></li>
					<li><a href="#" target="black"><img src="../Imagens/facebook.png"></i></a>
					</li>
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