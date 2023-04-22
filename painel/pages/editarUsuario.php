<div class="box-content left w100">
    <h2><i class=" fa-solid fa-user-pen"><span> Editar usuario</span></i></h2>

    <form method="POST" enctype="multipart/form-data">

    <?php 
        if (isset($_POST['acao'])) {
            $nome   = $_POST['admin_nome'];
            $senha  = $_POST['senha'];
            $imagem = $_FILES['imagem'];
            $imagem_atual = $_POST['imagem_atual'];
             $usuario = new Usuario();
            if($imagem['name'] != ''){
                if (Painel::imagemValida($imagem,
                Painel::deleteFile($imagem_atual))) {
                    Painel::deleteFile($imagem_atual);
                    $imagem = Painel::uploadFile($imagem);
                    if ($usuario->atualizarUsuario($nome, $senha, $imagem)) {
                        $_SESSION['img'] = $imagem;
                        Painel::alert('sucesso', '<spam>Atualização efetuada sucesso</spam>');
                    } else {
                        Painel::alert('erro', '<spam>Falha ao atualizar</spam>');
                    } 
                }
            }else {
                $imagem = $imagem_atual;
                if($usuario->atualizarUsuario($nome,$senha,$imagem)){
                    Painel::alert('sucesso', '<spam>Atualização efetuada</spam>');
                }else {
                    Painel::alert('erro', '<spam>Falha ao atualizar</spam>');
                }
            }
        }
    ?>

        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="admin_nome"  required value="<?php echo $_SESSION['admin_nome'];?>">
        </div><!--form-group-->
        
        <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="senha" required value="<?php echo $_SESSION['password'];?>">
        </div><!--form-group-->
       
        <div class="form-group">
            <label>Foto:</label>
            <input type="file" name="imagem"/>
            <input type="hidden" name="imagem_atual" value="<?php echo $_SESSION['img'];?>">
        </div><!--form-group-->

        <div class="form-group">
            <input type="submit" name="acao" value="Editar!" required>
        </div><!--form-group-->

    </form>



</div>