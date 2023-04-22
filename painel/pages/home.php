<?php
$usuariosOnline = Painel::listarUsuariosOnline();

$pegarVisitasTotais = MySql::conectar()->prepare("SELECT * FROM `admin.visitas`");
$pegarVisitasTotais->execute();
$pegarVisitasTotais = $pegarVisitasTotais->rowCount();

$pegarVisitasHoje = MySql::conectar()->prepare("SELECT * FROM `admin.visitas` WHERE dias = ?");
$pegarVisitasHoje->execute(array(date('Y-m-d')));
$pegarVisitasHoje = $pegarVisitasHoje->rowCount();
?>


<div class="box-content left w100">
    <h2><i class="fa-solid fa-house"> <span>Painel de Controle - Kids Academy</span></i></h2>

    <div class="box-metricas">
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Usuários online</h2>
                <p><?php echo count($usuariosOnline) ?></p>
            </div>
            <!--box-metricas-wraper-->
        </div>
        <!--box-metricas-single-->

        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Total de Visitas</h2>
                <p><?php echo $pegarVisitasTotais ?></p>
            </div>
            <!--box-metricas-wraper-->
        </div>
        <!--box-metricas-single-->

        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Visitas Hoje</h2>
                <p><?php echo $pegarVisitasHoje ?></p>
            </div>
            <!--box-metricas-wraper-->
        </div>
        <!--box-metricas-single-->

    </div>
    <!--box-metricas-->
</div>
<!--box-content left w100"-->

<div class="box-content left w100">
    <h2><i class="fa-solid fa-users"><span> Usuários Online</span></i></h2>

    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span>IP</span>
            </div>
            <!--col-->
            <div class="col">
                <span>Ultima ação</span>
            </div>
            <!--col-->
            <div class="clear"></div>
        </div>
        <!--row-->


        <?php
        foreach ($usuariosOnline as $key => $value) {
            # code...
        ?>

            <div class="row">
                <div class="col">
                    <span><?php echo $value['ip'] ?></span>
                </div>
                <!--col-->
                <div class="col">
                    <span><?php echo date('d/m/Y H:i:s', strtotime($value['ultima_acao'])) ?></span>
                </div>
                <!--col-->
                <div class="clear"></div>
            </div>
            <!--row-->
        <?php } ?>

    </div>
    <!--table-responsive-->

</div>
<!--box-content left-->