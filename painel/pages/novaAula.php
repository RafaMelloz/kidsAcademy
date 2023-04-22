<?php
verificaPermissaoPagina(1, 2);
?>


<div class="box-content left w100">
    <h2><i class="fa-solid fa-user-plus"><span> Adicionar aula</span></i></h2>

    <form method="POST" enctype="multipart/form-data">

        <?php
        if (isset($_POST['acao'])) {
            $nome = $_POST['nome_aula'];
            $modulo_id = $_POST['modulo_id'];
            $link = $_POST['link_aula'];


            if ($nome == ''|| $link== '') {
                Painel::alert('erro', '<spam>Preencha os campos</spam>');
            } else {
                $sql = \MySql::conectar()->prepare("INSERT INTO `aulas_curso` VALUES (null,?,?,?)");
                $sql->execute(array($modulo_id, $link,$nome));
                Painel::alert('sucesso', '<spam>Aula cadastrada!<spam>');
            }
        }

        ?>

        <div class="form-group">
            <label>Nome do aula:</label>
            <input type="text" name="nome_aula">
        </div>

        <div class="form-group">
            <label>Selecione o Módulo:</label>
            <select name="modulo_id">
                <?php
                $modulos = \MySql::conectar()->prepare("SELECT * FROM `modulos_curso`");
                $modulos->execute();
                $modulos = $modulos->fetchAll();
                foreach ($modulos as $key => $value) {
                ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['nome_modulo']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label>Link da aula:</Link>:</label>
            <input type="text" name="link_aula">
        </div>


        <div class="form-group">
            <input type="submit" name="acao" value="Adicionar!">
        </div>
        <!--form-group-->

    </form>
</div>