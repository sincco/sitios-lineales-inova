<?php
class productosModelo extends Modelo {
	public function leer($upc = '') {
		if(strlen($upc) > 0)
			return $this->_db->query("SELECT * FROM products WHERE upc = :upc;", array("upc"=>$upc));
		else
			return $this->_db->query("SELECT * FROM products;");
	}

	public function insertar($datos) {
		#echo "REPLACE INTO products SET upc = '{$datos['UPC']}', description = '{$datos['Description']}', Date=CURDATE(), Time=CURTIME(), ID_user=1;";
		if(strlen($datos['UPC']) > 0)
			return $this->_db->query("REPLACE INTO products SET upc = :upc, description = :description, Date=CURDATE(), Time=CURTIME(), ID_user=1;", array("upc"=>$datos['UPC'], "description"=>$datos['Description']));
		else
			return FALSE;
	}

	public function borrar($datos) {
		#echo "REPLACE INTO products SET upc = '{$datos['UPC']}', description = '{$datos['Description']}', Date=CURDATE(), Time=CURTIME(), ID_user=1;";
		if(strlen($datos['UPC']) > 0)
			return $this->_db->query("DELETE FROM products WHERE upc = :upc;", array("upc"=>$datos['UPC']));
		else
			return FALSE;
	}

	public function grid($upc = '', $desc = '') {
		$_where = array();
		if(strlen($upc) > 0)
			array_push($_where,"pro.UPC like '%{$upc}%' ");
		if(strlen($desc) > 0)
			array_push($_where,"pro.Description like '%{$desc}%' ");
		$_where = implode(" AND ", $_where);
		if(strlen($_where) > 0)
			$_where = " WHERE ".$_where;
		return $this->_db->query("SELECT pro.UPC, pro.Description
			FROM products pro".$_where);
	}

#Activar automaticamente el armado de JSON
	public function json($id = '') {
		if(strlen($id) > 0)
			return $this->_db->query("SELECT id,titulo,fecha,substring(contenido,1,40) FROM articulos WHERE id = :id;", array("id"=>$id));
		else
			return $this->_db->query("SELECT id,titulo,fecha,substring(contenido,1,40) FROM articulos;");
	}
}