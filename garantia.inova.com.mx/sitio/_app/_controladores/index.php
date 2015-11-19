<?php
	class indexControlador extends Controlador{
		public function index(){
		//Cargar funciones generales en BD
			$_general = $this->cargaModelo("general");
			$this->_vista->_origenes = $_general->getEnum("warranties", "Origin");
			$this->_vista->_estados = $_general->getEnum("warranties", "State");
		//Dibujar la pantalla
			$this->_vista->dibuja("header.tpl");
			$this->_vista->dibuja("alta.tpl");
			$this->_vista->dibuja("footer.tpl");
		}
	}