<?php
    session_start();
    include_once('../configPainel.php');





    if(isset($_POST['submit'])){
        //acessa
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = \MySql::conectar()->prepare("SELECT * FROM `usuario` WHERE email= ? and senha = ?");
        $sql->execute(array($email,$senha));
        if ($sql->rowCount() < 1) {
            
            unset($_SESSION['email']);  
            unset($_SESSION['senha']);  
            header('Location:../pages/login.php');
        }else {
            $info = $sql->fetch();
            $_SESSION['nome_aluno'] = $info['nome'];
            $_SESSION['id_aluno'] = $info['id'];
            $_SESSION['cpf'] = $info['cpf']; 
            $_SESSION['email'] = $email;  
            $_SESSION['senha'] = $senha;
            $_SESSION['imagem_aluno'] = $info['imagem_aluno'];

            
            header('Location: ../pages/index.php');
          
        }

    } else {
    //nao acessa
    echo '<h1>erro</h1>';
        header('Location: ../pages/login.php');
    }


    
?>