<?php
session_start();
class garantiasControlador extends Controlador{	
	public function index() {}
	
	public function activacion() {
		$_modelo = $this->cargaModelo("warranties");
		echo $_modelo->inserta($_POST);
	}

	public function grid() {
		$_where = array();
		if(strlen(trim($_POST['UPC']))>0)
			array_push($_where, "pro.UPC='".$_POST['UPC']."'");
		if(strlen(trim($_POST['Descripcion']))>0)
			array_push($_where, "pro.Description like '%".$_POST['Descripcion']."%'");
		if(strlen(trim($_POST['Nombre']))>0)
			array_push($_where, "concat(war.FirstName, ' ', war.LastName1, ' ', war.LastName2) like '%".$_POST['Nombre']."%'");
		if(strlen(trim($_POST['folioInicial']))>0 && strlen(trim($_POST['folioFinal']))>0) {
			array_push($_where, "war.Folio between {$_POST['folioInicial']} AND {$_POST['folioFinal']}");
		} else {
			if(strlen(trim($_POST['folioInicial']))>0) {
				array_push($_where, "war.Folio >= {$_POST['folioInicial']}");
			}
			if(strlen(trim($_POST['folioFinal']))>0) {
				array_push($_where, "war.Folio <= {$_POST['folioFinal']}");
			}
		}
		if(isset($_SESSION['usuario'])) {
			$_modelo = $this->cargaModelo("warranties");
			$_garantias = $_modelo->grid(implode(" AND ", $_where));
			echo json_encode($_garantias);
		}
	}

	public function exportar() {
		$_where = array();
		if(strlen(trim($_GET['UPC']))>0)
			array_push($_where, "pro.UPC='".$_GET['UPC']."'");
		if(strlen(trim($_GET['Descripcion']))>0)
			array_push($_where, "pro.Description like '%".$_GET['Descripcion']."%'");
		if(strlen(trim($_GET['Nombre']))>0)
			array_push($_where, "concat(war.FirstName, ' ', war.LastName1, ' ', war.LastName2) like '%".$_GET['Nombre']."%'");
		if(strlen(trim($_GET['folioInicial']))>0 && strlen(trim($_GET['folioFinal']))>0) {
			array_push($_where, "war.Folio between {$_GET['folioInicial']} AND {$_GET['folioFinal']}");
		} else {
			if(strlen(trim($_GET['folioInicial']))>0) {
				array_push($_where, "war.Folio >= {$_GET['folioInicial']}");
			}
			if(strlen(trim($_GET['folioFinal']))>0) {
				array_push($_where, "war.Folio <= {$_GET['folioFinal']}");
			}
		}
		if(isset($_SESSION['usuario'])) {
			$_modelo = $this->cargaModelo("warranties");
			$_garantias = $_modelo->grid(implode(" AND ", $_where));
			$_csv = new sCSV("garantias.csv",",");
			$_csv->html($_garantias);
		} else {
			echo "Debes iniciar sesión para obtener estos datos";
		}
	}
}