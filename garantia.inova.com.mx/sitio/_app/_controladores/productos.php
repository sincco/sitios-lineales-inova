<?php
session_start();
class productosControlador extends Controlador{	
	public function index() {
		$this->_vista->dibuja("header_admin.tpl");
		if(isset($_SESSION['usuario']))
			$this->_vista->dibuja("productos_alta.tpl");
		else
			$this->_vista->dibuja("login.tpl");
		$this->_vista->dibuja("footer.tpl");
	}

	public function grid() {
		#if(isset($_SESSION['usuario'])) {
			$_productos = $this->_modelo->grid($_GET['UPC'],$_GET['Description']);
			echo json_encode($_productos);
		#}
	}

	public function guarda() {
		#if(isset($_SESSION['usuario']))
			echo json_encode(array("respuesta"=>$this->_modelo->insertar($_POST)));
		#}
	}

	public function borra() {
		#if(isset($_SESSION['usuario']))
			echo json_encode(array("respuesta"=>$this->_modelo->borrar($_POST)));
		#}
	}
}