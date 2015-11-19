<?php
session_start();
class reportesControlador extends Controlador{	
	public function index() {
		$this->_vista->dibuja("header_admin.tpl");
		if(isset($_SESSION['usuario']))
			$this->_vista->dibuja("reporte_garantias.tpl");
		else
			$this->_vista->dibuja("login.tpl");
		$this->_vista->dibuja("footer.tpl");
	}
}