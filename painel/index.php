<?php
  include('../configPainel.php');

    if(painel::logado() == false){
        include('login.php');
    }else {
        include('main.php');
    }


?>