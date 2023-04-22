<?php include('configPainel.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kids Academy</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="Imagens/favicon.ico" type="image/x-icon">
</head>

<body>

	<header>
		<nav>
			<img src="imagens/logokids.png" />
			<div class="mobile-menu">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
			<!--mobile-menu-->
			<ul class="nav-list">
				<li><a class="grup" href="index.php">Home</a></li>
				<li><a class="grup" href="pages/Cursos.html">Cursos</a></li>
				<li><a class="btnL2" href="pages/login.php">Entrar</a></li>
				<li><a class="btnL3" href="pages/cadastro.php">Cadastre-se</a></li>
			</ul>
		</nav>
		<!--nav-->
	</header>
	<!--header-->
	<script src="js/mobile-navbar.js"></script>
	<!--header-->

	<div class="Inicio">
		<div class="center">
			<div class="text">
				<h2>Aprenda Sobre</h2>
				<div class="text-animation typing-animation">
					<h1>COMPUTAÇÃO</h1>
				</div>
				<h2>De maneira divertida</h2>
				<a class="btnL" href="#C2">MATRICULAR-SE</a>
			</div>
			<!--text-->
		</div>
		<!--center-->
	</div>
	<!--Inicio-->

	<div class="backSobre">
		<div class="imagem-sobre">
			<img id=" criança3" src="Imagens/mocinha2.svg">
		</div>
		<div class="sobre">
			<div class="center">



				<div class="text-sobre">
					<h2>Sobre nós</h2>
					<p>
						Bem vindo ao nosso site, somos uma empresa fornecedora de Cursos de Computação para crianças, com níveis do básico ao Avançado!
					</p>
					<p>
						A Academi_Kids têm como objetivo orientá-las para que aprendam a usar os computadores de maneira inteligente. Com o conhecimento apropriado, as crianças não usarão os computadores apenas como um instrumento de jogo, mas sim como uma ferramenta útil para os estudos.
					</p>
					<p>
						A partir dos 6 anos de idade, já é possível matricular o seu filho em um curso de informática básica para crianças. Com um método totalmente criado para os mais novos, a escola ensinará a acessar a internet e a utilizar os principais softwares para fazer trabalhos do colégio, como o Word e o Powerpoint
					</p>



					<div class="botao">
						<a href="#C1">Contato</a>
					</div>
					<!--botao-->
				</div>
				<!--text-sobre-->
				<div class="clear"></div>
			</div>
			<!--center-->
		</div>
		<!--sobre-->
	</div>
	<!--backInicio-->

	<div class="cursos">
		<div class="center">
			<h1 id="C2">Nossos Cursos</h1>
			<p>Cursos com Pacote Office, HTML, Java entre outros.</p>

			<main class="cards">

				<section class="card office">
					<div class="icon">
						<img src="Imagens/office.svg" alt="Contact us.">
					</div>
					<h3>Pacote Office</h3>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
					<a href="pages/office.html"><button>CONHECER CURSO</button></a>
				</section>


				<section class="card html">
					<div class="icon">
						<img src="Imagens/html.svg" alt="Shop here.">
					</div>
					<h3>HTML e CSS</h3>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
					<a href="pages/htmlcss.html"><button>CONHECER CURSO</button></a>
				</section>

				<section class="card java">
					<div class="icon">
						<img src="Imagens/Java.svg" alt="About us.">
					</div>
					<h3>Java</h3>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
					<a href="pages/java.html"><button>CONHECER CURSO</button></a>
				</section>



			</main>
			<!--cards-->

			<main class="cards2">

				<section class="card Sistemas">
					<div class="icon">
						<img src="Imagens/windows.svg" alt="Contact us.">
					</div>
					<h3>Sistemas Operacionais</h3>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
					<button>CONHECER CURSO</button>
				</section>


				<section class="card redes">
					<div class="icon">
						<img src="Imagens/rede.png" alt="Shop here.">
					</div>
					<h3>Redes Computacionais</h3>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
					<button>CONHECER CURSO</button>

			</main>
			<!--cards-->
			<div class="clear"></div>
		</div>
		<!--center-->
	</div>
	<!--cursos-->

	<div class="missao">
		<div class="descmissao">
			<img src="https://static.wixstatic.com/media/cb8d8d_3612a038a45f4d7ea3ec022374a1a48f~mv2.png/v1/fill/w_176,h_317,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/cb8d8d_3612a038a45f4d7ea3ec022374a1a48f~mv2.png" alt="">
			<div class="text-desc">
				<h2>Missão da Kids Academy</h2>
				<p>Ao adquirir o curso você tem acesso vitálico a diversas aulas para ver quando quiser. Aulas de diversos temas de computação, tais como: Java, HTML, Redes, Sistemas Operacionais e Pacote Office.</p>

				<p>Faça o quiz e teste seu conhecimeto!</p>

				<div class="botaoQuiz">
					<a href="pages/quiz.html">Quiz</a>
				</div>
				<!--botao-->
			</div>
		</div>

		<!--descmissao-->
		<div class="clear"></div>
	</div>
	<!--missao-->

	<div></div>

	<div class="suporte">
		<h1 id="C1">Entre em contato</h1>

		<div>
			<div class="form">
				<form action="https://formsubmit.co/rafaelmeloalvessouza@gmail.com" method="POST">
					<div class="inputs">
						<span>Nome*</span><br>
						<input type="text" name="nome" placeholder="Digite seu nome" required>
					</div>
					<!--inputs-->

					<div class="inputs">
						<span>Email*</span><br>
						<input type="email" name="email" placeholder="Insira seu Email" required>
					</div>
					<!--inputs-->

					<div class="inputs">
						<span>Assunto</span><br>
						<input type="text" name="assunto" placeholder="Insira o assunto">
					</div>
					<!--inputs-->

					<div class="inputs">
						<span>Mensagem</span><br>
						<div>
							<textarea name="message" placeholder="Insira sua Mensagem :D"></textarea>
						</div>
					</div>
					<!--inputs-->

					<div class="submit">
						<input type="hidden" name="_captcha" value="false">
						<input type="hidden" name="_next" value="http://localhost/AcademyKids/pages/obrigado.html">
						<input type="submit" name="acao" value="Enviar">
					</div>
					<!--SUBMIT-->
				</form>
			</div>
			<!--FORM-->
		</div>
		<!--SUPORTE-->
	</div>

	<footer>
		<div class="footer">

			<div class="footer-icon">
				<ul>
					<li><a href="https://instagram.com/kidsacademy.tcc?igshid=YmMyMTA2M2Y=" target="black"><i class="fa fa-facebook"><img src="Imagens/logotipo-do-instagram.png"></i></a></li>
					<li><a href="#" target="black"><i class="fa fa-google-plus"><img src="Imagens/facebook.png"></i></a></li>
					<li><a href="#" target="black"><i class="fa fa-twitter"><img src="Imagens/twitter.png"></i></a></li>
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
<<<<<<< HEAD:index.php

</html>
=======
</html>
>>>>>>> a1f76d9f7bfb5f4e2eb52c4092dab81ce2472005:index.html
