<?php
session_start();
class adminControlador extends Controlador{	
	public function index() {
		$this->_vista->dibuja("header_admin.tpl");
		if(isset($_SESSION['usuario']))
			$this->_vista->dibuja("folios_alta.tpl");
		else
			$this->_vista->dibuja("login.tpl");
		$this->_vista->dibuja("footer.tpl");
	}

	public function login() {
		$_usuarios = $this->cargaModelo("admin_users");
		$_usuario = $_usuarios->login($_POST['UserName'],sha1($_POST['Password']));
		if(count($_usuario)>0)
			$_SESSION['usuario'] = $_POST['UserName'];
		print_r($_usuario);
	}

	public function salir() {
		unset($_SESSION['usuario']);
		$this->_vista->dibuja("header_admin.tpl");
		$this->_vista->dibuja("login.tpl");
		$this->_vista->dibuja("footer.tpl");
	}

	public function folios() {
		$this->_vista->dibuja("header_admin.tpl");
		if(isset($_SESSION['usuario']))
			$this->_vista->dibuja("folios_alta.tpl");
		else
			$this->_vista->dibuja("login.tpl");
		$this->_vista->dibuja("footer.tpl");
	}

	public function reportes() {
		$this->_vista->dibuja("header_admin.tpl");
		if(isset($_SESSION['usuario']))
			$this->_vista->dibuja("reporte_garantias.tpl");
		else
			$this->_vista->dibuja("login.tpl");
		$this->_vista->dibuja("footer.tpl");
	}

}