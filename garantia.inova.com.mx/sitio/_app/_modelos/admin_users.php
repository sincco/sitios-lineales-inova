<?php
class admin_usersModelo extends Modelo {
	public function login($UserName, $Password) {
		$parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '. DB_CHAR);
		$_db = new PDO("mysql:host=172.20.27.78;dbname=direksys2_e2",
                            "d2tmk", "BVkdsU839*&783gsklNslkbHs", $parametros);
		$_query = "SELECT ID_admin_users,FirstName,UserName FROM admin_users 
			WHERE UserName = '{$UserName}' AND Password = '{$Password}'";
		$_statement = $_db->prepare($_query);
		$_statement->execute();
		$_resultado = $_statement->fetchAll(PDO::FETCH_ASSOC);
		$_statement->closeCursor();
		return $_resultado;
	}
}