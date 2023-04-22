<?php
verificaPermissaoPagina(2);
?>


<div class="box-content left w100">
    <h2><i class="fa-solid fa-user-plus"><span> Adicionar Usuario</span></i></h2>

    <form method="POST" enctype="multipart/form-data">

        <?php
        if (isset($_POST['acao'])) {
            $email = $_POST['email'];
            $nome   = $_POST['admin_nome'];
            $senha  = $_POST['senha'];
            $imagem = $_FILES['imagem'];
            $cargo = $_POST['cargo'];
            $usuario = new Usuario();
            
            if ($email =='') {
                Painel::alert('erro', '<spam>Login vázio!</spam>');
            }else if ($nome=='') {
                Painel::alert('erro', '<spam>Nome vázio!</spam>');
            } else if ($senha== '') {
                Painel::alert('erro', '<spam>Senha vázio!</spam>');
            } else if ($cargo == '') {
                Painel::alert('erro', '<spam>Cargo precisa ser selecionado!</spam>');
            } else if ($imagem ['name'] == '') {
                Painel::alert('erro', '<spam>Selecione uma imagem!</spam>');
            }else {
                if (Painel::imagemValida($imagem)== false) {
                    Painel::alert('erro', '<spam>Imagem invalida!</spam>');
                }else if ($cargo >= $_SESSION['cargo']) {
                    Painel::alert('erro', '<spam>Selecione um cargo menor!</spam>');
                }else if(Usuario::userExists($email)){
                    Painel::alert('erro', '<spam>Esse login ja existe!</spam>');
                }else {
                    $usuario = new Usuario();
                    $imagem = Painel::uploadFile($imagem);
                    $usuario->cadastrarUsuario($email,$senha,$imagem,$nome,$cargo);
                    Painel::alert('sucesso', '<spam>Cadastro efetuado</spam>');
                }
                    
                
            }

        }

        ?>

        <div class="form-group">
            <label>Login:</label>
            <input type="text" name="email">
        </div>
        <!--form-group-->

        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="admin_nome">
        </div>
        <!--form-group-->

        <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="senha">
        </div>
        <!--form-group-->

        <div class="form-group">
            <label>Cargo:</label>
            <select name="cargo">
                <?php
            foreach (Painel::$cargos as $key => $value) {
            echo '<option value="' . $key . '">' . $value . '</option>';
            } ?>
        </div>
        <!--form-group-->

        <div class="form-group">
            <label>Foto:</label>
            <input type="file" name="imagem" />
        </div>
        <!--form-group-->

        <div class="form-group">
            <input type="submit" name="acao" value="Adicionar!">
        </div>
        <!--form-group-->

    </form>



</div>