<?php 

class aulaController
{
    public function pacoteOfice($arg){
        $idAula = $arg[2];
        $aula = \MySql::conectar()->prepare("SELECT * FROM `aulas_curso` WHERE id = ?");
        $aula->execute(array($idAula));
        mainView::render('pacoteOfice.php');

    }
}



?>