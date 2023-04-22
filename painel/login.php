<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="<?php echo  INCLUDE_PATH_PAINEL ?>stylePainel.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
    <title>Painel de controle</title>
</head>

<body>

    <div class="box-login">
        <?php
        if (isset($_POST['acao'])) {
            $email = $_POST['user'];
            $senha = $_POST['password'];
            $sql = MySql::conectar()->prepare("SELECT * FROM `admin_usuario` WHERE  email = ? AND senha = ?");
            $sql->execute(array($email, $senha));
            if ($sql->rowCount() == 1) {
                $info = $sql->fetch();
                //logado
                $_SESSION['login'] = true;
                $_SESSION['user'] = $email;
                $_SESSION['password'] = $senha;
                $_SESSION['cargo'] = $info['cargo'];
                $_SESSION['admin_nome'] = $info['admin_nome'];
                $_SESSION['img'] = $info['img'];
                header('Location:' . INCLUDE_PATH_PAINEL);
                die();
            } else {
                echo '<div class="erro"><i class="fa fa-times"></i> Usuário ou senha incorretos!</div>';
            }
        }

        ?>

        <h2>Efetue seu login</h2>
        <form method="POST">
            <input type="text" name="user" placeholder="Login.." required>
            <input type="password" name="password" placeholder="Senha.." required>
            <input type="submit" name="acao" value="Logar!">
        </form>
    </div>

</body>

</html>