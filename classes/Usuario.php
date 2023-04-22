<?php
	
	class Usuario{

		public function atualizarUsuario($nome,$senha,$imagem){
			$sql = MySql::conectar()->prepare("UPDATE `admin_usuario` SET admin_nome = ?,senha = ?,img = ? WHERE email = ?");
			if($sql->execute(array($nome,$senha,$imagem,$_SESSION['user']))){
				return true;
			}else{
				return false;
			}
		}

		public static function userExists($email){
			$sql = MySql::conectar()->prepare("SELECT `id` FROM `admin_usuario` WHERE email=?");
			$sql->execute(array($email));
			if($sql->rowCount() == 1)
				return true;
			else
				return false;
		}

		public static function cadastrarUsuario($email,$senha,$imagem,$nome,$cargo){
			$sql = MySql::conectar()->prepare("INSERT INTO `admin_usuario` VALUES (null,?,?,?,?,?)");
			$sql->execute(array($email,$senha,$imagem,$nome,$cargo));
		}

	

		public function atualizarUsuarioAluno($nome,$senha,$imagemAluno){
			$sql = MySql::conectar()->prepare("UPDATE `usuario` SET nome = ?,senha = ?, imagem_aluno = ? WHERE email = ?");
			if($sql->execute(array($nome,$senha,$imagemAluno, $_SESSION['email']))){
				return true;
			}else{
				return false;
			}
		}
	}
?>