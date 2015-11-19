<?php
class foliosModelo extends Modelo {
	public function grid($upc = '', $desc = '') {
		$_where = array();
		if(strlen($upc) > 0)
			array_push($_where,"pro.UPC like '%{$upc}%' ");
		if(strlen($desc) > 0)
			array_push($_where,"pro.Description like '%{$desc}%' ");
		$_where = implode(" AND ", $_where);
		if(strlen($_where) > 0)
			$_where = " WHERE ".$_where;
		return $this->_db->query("SELECT pro.UPC, pro.Description, fol.Initial, fol.Final, fol.ID
			FROM products pro
			INNER JOIN folios fol using(UPC)".$_where);
	}

	public function descripcion($folio) {
		return $this->_db->query("SELECT pro.UPC, pro.Description, fol.Initial, fol.Final
			FROM products pro
			INNER JOIN folios fol using(UPC)
			WHERE {$folio} BETWEEN fol.Initial AND fol.Final;");
	}

	public function descripcionUPC($upc) {
		return $this->_db->query("SELECT pro.UPC, pro.Description
			FROM products pro	WHERE pro.UPC='{$upc}';");
	}

	public function insertar($datos) {
		if(isset($datos['ID'])) {
			$_query = "UPDATE folios SET 
				Initial='{$datos['Initial']}',
				Final='{$datos['Final']}'
				WHERE ID='{$datos['ID']}';";
			$this->_db->query($_query);
			return $datos['ID'];
		} else {
			$_query = "INSERT INTO folios SET 
				UPC='{$datos['UPC']}',
				Initial='{$datos['Initial']}',
				Final='{$datos['Final']}',
				Date=CURDATE(),
				Time=CURTIME();";
			return $this->_db->insertRAW($_query);
		}
	}

	public function borrar($datos) {
		if(isset($datos['ID'])) {
			$_query = "DELETE FROM folios WHERE ID='{$datos['ID']}';";
			return $this->_db->query($_query);
		}
	}

#Activar automaticamente el armado de JSON
	public function json($id = '') {
		if(strlen($id) > 0)
			return $this->_db->query("SELECT id,titulo,fecha,substring(contenido,1,40) FROM articulos WHERE id = :id;", array("id"=>$id));
		else
			return $this->_db->query("SELECT id,titulo,fecha,substring(contenido,1,40) FROM articulos;");
	}
}