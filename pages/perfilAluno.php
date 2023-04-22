<?php
include('../configPainel.php');
/* print_r($_SESSION); */
if (isset($_GET['loggout'])) {
    session_destroy();
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


    <section id="editar_user">
        <div class="center">

            <div class="box-usuario">

                <?php
                if ($_SESSION['imagem_aluno'] == '') {
                ?>
                    <div class="avatar-usuario">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <!--avatar-usuario-->
                <?php } else { ?>
                    <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['imagem_aluno']; ?>" />
                    </div>
                    <!--avatar-usuario-->
                <?php } ?>
            </div>
            <!--box_usuario-->



            <form method="POST" enctype="multipart/form-data">

                <?php
                if (isset($_POST['acao'])) {
                    $nome   = $_POST['nome_aluno'];
                    $senha  = $_POST['senha_aluno'];
                    $imagemAluno = $_FILES['imagem_perfil'];
                    $imagem_atualA = $_POST['imagem_aluno_atual'];
                    $usuario = new Usuario();
                    if ($imagemAluno['name'] != '') {
                        if (Painel::imagemValida(
                            $imagemAluno,
                            Painel::deleteFile($imagem_atualA)
                        )) {

                            $imagemAluno = Painel::uploadFile($imagemAluno);
                            if ($usuario->atualizarUsuarioAluno($nome,$senha, $imagemAluno)) {
                                $_SESSION['imagem_aluno'] = $imagemAluno;
                                Painel::alert('sucesso', '<spam>Atualização efetuada sucesso</spam>');
                            } else {
                                Painel::alert('erro', '<spam>Falha ao atualizar</spam>');
                            }
                        }
                    } else {
                        $imagemAluno = $imagem_atualA;
                        if ($usuario->atualizarUsuarioAluno($nome,$senha, $imagemAluno)) {
                            Painel::alert('sucesso', '<spam>Atualização efetuada</spam>');
                        } else {
                            Painel::alert('erro', '<spam>Falha ao atualizar</spam>');
                        }
                    }
                }
                ?>

                <div class="form-group-img">
                    <label for="form-field-field_53c80dc" class="elementor-field-label">Envie sua foto</label>
                    <input type="file" name="imagem_perfil" aria-required="true" id="form-field-field_53c80dc" class="elementor-field elementor-size-lg  elementor-upload-field" />
                    <input type="hidden" name="imagem_aluno_atual" value="<?php echo $_SESSION['imagem_aluno']; ?>">
                </div>
                <!--form-group-->

                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="nome_aluno" required value="<?php echo $_SESSION['nome_aluno']; ?>">
                </div>
                <!--form-group-->

                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" required disabled value="<?php echo $_SESSION['email']; ?>">
                </div>
                <!--form-group-->

                <div class="form-group">
                    <label>CPF:</label>
                    <input type="text" name="cpf" disabled required value="<?php echo $_SESSION['cpf']; ?>">
                </div>
                <!--form-group-->

                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" name="senha_aluno" required value="<?php echo $_SESSION['senha']; ?>">
                </div>
                <!--form-group-->



                <div class="form-group">
                    <input type="submit" name="acao" value="Editar!" required>
                </div>
                <!--form-group-->
            </form>
        </div>
    </section>

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