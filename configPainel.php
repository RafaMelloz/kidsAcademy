<?php

session_start();
date_default_timezone_set('America/Sao_Paulo');
$autoload = function ($class) {
    if ($class == 'Email') {
        require_once('classes/phpmailer/PHPMailerAutoLoad.php');
    }
    include('classes/'.$class.'.php');
};

spl_autoload_register($autoload);


define('INCLUDE_PATH', 'http://localhost/AcademyKids/');
define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

define('BASE_DIR_PAINEL',__DIR__.'/painel');


//Conectar com banco de dados!
define('HOST', 'Localhost');
define('USER', 'root');
define('PASSWORD', '150605R$fa');
define('DATABASE', 'kidsacademy');


//Constantes para o painel de controle
define('NOME_EMPRESA', 'Kids Academy');



//Função
function pegaCargo($indice){

    return Painel::$cargos[$indice];
}

function selecionadoMenu($par){
    $url = explode('/',@$_GET['url'])[0];
    if ($url == $par) {
        echo 'class="menu-active"';
    }
}

function verificaPermissaoMenu($permissao){
    if ($_SESSION['cargo'] >= $permissao) {
        return;
    }else {
        echo 'style="display:none"';
    }
}
 
function verificaPermissaoPagina($permissao){
    if ($_SESSION['cargo'] >= $permissao) {
        return;
    } else {
        include('painel/paiges/permissaoNegada.php');
        die();
    }
}

class homeModel
{

    public static function hasCursobyId($idAluno)
    {
        
        $sql = \MySql::conectar()->prepare("SELECT * FROM `controlecurso` WHERE aluno_id = $idAluno and curso_id = '1'" ) ;
        $sql->execute();
        if ($sql->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public static function hasCursobyIdh($idAluno)
    {
    $sql = \MySql::conectar()->prepare("SELECT * FROM `controlecurso` WHERE aluno_id = $idAluno and curso_id = '2'");
    $sql->execute();
    if ($sql->rowCount() == 1) {
         return true;
    } else {
        return false;
    }

    }

    public static function hasCursobyIdj($idAluno)
    {
        $sql = \MySql::conectar()->prepare("SELECT * FROM `controlecurso` WHERE aluno_id = $idAluno and curso_id = '3'");
        $sql->execute();
        if ($sql->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    






}






?>
