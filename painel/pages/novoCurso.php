<?php
verificaPermissaoPagina(1, 2);
?>


<div class="box-content left w100">
    <h2><i class="fa-solid fa-chalkboard-user"><span> Adicionar módulo</span></i></h2>

    <form method="POST" enctype="multipart/form-data">

        <?php
        if (isset($_POST['acao'])) {
            $nomeCurso = $_POST['nomeCurso'];

            if ($nomeCurso == '') {
                Painel::alert('erro', '<spam>Preencha os campos</spam>');
            } else {
                $sql = \MySql::conectar()->prepare("INSERT INTO `cursos` VALUES (null,?)");
                $sql->execute(array($nomeCurso));
                Painel::alert('sucesso', '<spam>Módulo cadastrado<spam>');
            }
        }

        ?>

        <div class="form-group">
            <label>Nome do Curso:</label>
            <input type="text" name="nomeCurso">
        </div>

        <div class="form-group">
            <input type="submit" name="acao" value="Adicionar!">
        </div>
        <!--form-group-->

    </form>
</div>