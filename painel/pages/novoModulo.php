<?php
verificaPermissaoPagina(1, 2);
?>


<div class="box-content left w100">
    <h2><i class="fa-solid fa-user-plus"><span> Adicionar módulo</span></i></h2>

    <form method="POST" enctype="multipart/form-data">

        <?php
        if (isset($_POST['acao'])) {
            $nomeModulo = $_POST['nome_modulo'];
            $curso_id = $_POST['curso_id'];

            if ($nomeModulo == '') {
                Painel::alert('erro', '<spam>Preencha os campos</spam>');
            } else {
                $sql = \MySql::conectar()->prepare("INSERT INTO `modulos_curso` VALUES (null,?,?)");
                $sql->execute(array($nomeModulo,$curso_id));
                Painel::alert('sucesso', '<spam>Módulo cadastrado<spam>');
            }
        }

        ?>

        <div class="form-group">
            <label>Nome do Módulo:</label>
            <input type="text" name="nome_modulo">
        </div>

        <div class="form-group">
            <label>Selecione o Curso:</label>
            <select name="curso_id">
                <?php
                $cursos = \MySql::conectar()->prepare("SELECT * FROM `cursos`");
                $cursos->execute();
                $cursos = $cursos->fetchAll();
                foreach ($cursos as $key => $value) {
                ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['nome_curso']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" name="acao" value="Adicionar!">
        </div>
        <!--form-group-->

    </form>
</div>