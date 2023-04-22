<?php
if (isset($_GET['loggout'])) {
    Painel::loggout();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="<?php echo  INCLUDE_PATH_PAINEL ?>stylePainel.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/afc3be874b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
    <title>Painel de controle</title>
</head>




<body>

    <div class="menu">
        <div class="menu-wraper">
            <div class="box-usuario">

                <?php
                if ($_SESSION['img'] == '') {
                ?>
                    <div class="avatar-usuario">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <!--avatar-usuario-->
                <?php } else { ?>
                    <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
                    </div>
                    <!--avatar-usuario-->
                <?php } ?>


                <div class="nome-usuario">
                    <p><?php echo $_SESSION['admin_nome']; ?></p>
                    <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                </div>
                <!--nome-usuario-->
            </div>
            <!--box_usuario-->
            <div class="items-menu">
                <h2>Administração do painel</h2>
                <a <?php selecionadoMenu('editarUsuario'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editarUsuario">Editar Usuário</a>
                <a <?php selecionadoMenu('adicionarUsuario'); ?> <?php verificaPermissaoMenu(2); ?> href=" <?php echo INCLUDE_PATH_PAINEL ?>adicionarUsuario">Adicionar Usuário</a>
                <h2>Gestão EAD</h2>
                <a <?php selecionadoMenu('novoCurso'); ?> <?php verificaPermissaoMenu(1, 2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>novoCurso">Novo Curso</a>
                <a <?php selecionadoMenu('novoModulo'); ?> <?php verificaPermissaoMenu(1, 2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>novoModulo">Novo Módulo</a>
                <a <?php selecionadoMenu('novaAula'); ?><?php verificaPermissaoMenu(1, 2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>novaAula">Nova Aula</a>
            </div>
            <!--items-menu-->
        </div>
        <!--menu-wraper-->
    </div>
    <!--menu-->

    <header>
        <div class=" center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="loggout">
                <a href="<?php INCLUDE_PATH_PAINEL ?>home"><i class="fa-solid fa-house"></i></a>
                <div style="padding:10px;display:inline;"></div>
                <a href="<?php INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </div>
            <!--LOGOUT-->


            <div class="clear"></div>

        </div>
        <!--center-->
    </header>
    <div class="clear"></div>


    <div class="content">
        <?php Painel::carregarPagina(); ?>
    </div>
    <!--content-->
    <script src="<?php echo  INCLUDE_PATH_PAINEL ?>js/jquery.js"> </script>
    <script src="<?php echo  INCLUDE_PATH_PAINEL ?>js/mainpainel.js"> </script>
</body>

</html>