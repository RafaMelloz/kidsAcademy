<?php
if (isset($_POST['submit'])) {
    include_once('../configPainel.php');

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $sql = \MySql::conectar()->prepare("INSERT INTO `usuario` VALUES (?,?,?,?,null,null)");
    $sql->execute(array($email, $nome, $cpf, $senha));
    header('Location: ../pages/login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastre-se</title>
    <link rel="stylesheet" type="text/css" href="../css/styleCadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
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
            <div> <img src="../imagens/cadastro.png" class="icon-matricula"></div>
            <h1>Cadastre-se e tenha acesso a nossa plataforma :)</h1>
        </div>
        <!--text-->
        <div class="Cadastro">
            <form id="form" action="cadastro.php" method="POST">
                <div class="inputs">

                    <p>E-mail*</p>
                    <input class="input-requerid" type="email" name="email" placeholder="E-mail" required oninput="emailValidate()">
                    <span class="span-required">Digite um email válido</span>

                    <p>Nome Completo*</p>
                    <input class="input-requerid" type="text" name="nome" placeholder="Nome" required oninput="nameValidate()">
                    <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>

                    <p>CPF*</p>
                    <input class="input-requerid" type="text" name="cpf" id="cpf" placeholder="CPF" required oninput="cpfValidate()">
                    <span class="span-required">Digite um CPF válido</span>

                    <p>Senha*</p>
                    <input class="input-requerid" type="password" name="senha" placeholder="Senha" required oninput="passwordValidate()">
                    <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>

                    <div class="submit">
                        <input type="submit" name="submit" value="Cadastrar">
                    </div>
                    <!--submit-->
                </div>
                <!--inputs-->
            </form>
            <!--form-->

            <script>
                const input = document.getElementById("cpf");

                input.addEventListener("keyup", formatarCPF);

                function formatarCPF(e) {

                    var v = e.target.value.replace(/\D/g, "");

                    v = v.replace(/(\d{3})(\d)/, "$1.$2");

                    v = v.replace(/(\d{3})(\d)/, "$1.$2");

                    v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

                    e.target.value = v;

                }
            </script>


            <div class="create">
                <p>Ja tem uma conta? Então<a href="Login.php"> Entre</a> nela!</p>
            </div>
        </div>
        <!--Recuperar-->
    </section>
    <!--back-->

    <div class="clear"></div>

    <footer>
        <div class="footer">

            <div class="footer-icon">
                <ul>
                    <li><a href="#" target="black"><i class="fa fa-facebook"><img src="../Imagens/logotipo-do-instagram.png"></i></a></li>
                    <li><a href="#" target="black"><i class="fa fa-google-plus"><img src="../Imagens/facebook.png"></i></a>
                    </li>
                    <li><a href="#" target="black"><i class="fa fa-twitter"><img src="../Imagens/twitter.png"></i></a></li>
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

<script>
    const form = document.getElementById('form');
    const campos = document.querySelectorAll('.input-requerid');
    const spans = document.querySelectorAll('.span-required');
    const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const cpfRegex = /^([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})/;

    /*   form.addEventListener('submit', (event) => {
          event.preventDefault();
          emailValidate();
          nameValidate();
          cpfValidate();
          passwordValidate();
      }); */

    function setError(index) {
        campos[index].style.border = '3px solid #e63636';
        spans[index].style.display = 'block';
    }

    function removeError(index) {
        campos[index].style.border = '';
        spans[index].style.display = 'none';
    }

    function nameValidate() {
        if (campos[1].value.length < 3) {
            setError(1);
        } else {
            removeError(1);
        }
    }

    function emailValidate() {
        if (!emailRegex.test(campos[0].value)) {
            setError(0);
        } else {
            removeError(0);
        }

    }

    function cpfValidate() {
        if (!cpfRegex.test(campos[2].value)) {
            setError(2);
        } else {
            removeError(2);
        }

    }

    function passwordValidate() {
        if (campos[3].value.length < 8) {
            setError(3);
        } else {
            removeError(3);
        }
    }
</script>

</html>