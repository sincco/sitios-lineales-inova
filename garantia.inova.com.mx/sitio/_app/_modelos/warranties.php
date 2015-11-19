<?php
class warrantiesModelo extends Modelo {
	public function inserta($datos) {
		unset($datos['__token']);
		$_campos = Framework::parseaDatosCampos($datos);
		$_previos = $this->_db->query("SELECT * FROM warranties WHERE Folio = '{$datos['Folio']}';");
		if(count($_previos) > 0) {
			return -1;
		} else {
			$_previos = $this->_db->query("SELECT * FROM folios WHERE '{$datos['Folio']}' BETWEEN Initial and Final;");
			if(count($_previos) > 0) {
				$_query = "INSERT INTO warranties SET 
					{$_campos},
					Date = CURDATE(),Time = CURTIME();";
				return $this->_db->insertRAW($_query);
			} else {
				return -2;
			}
		}
	}

	public function grid($where = "") {
		$_query = "SELECT war.Folio, concat(war.FirstName, ' ', war.LastName1, ' ', war.LastName2) Nombre, fol.UPC, pro.Description, war.Email, war.Phone1, war.Origin
			FROM warranties war
			INNER JOIN folios fol ON (war.folio between fol.Initial and fol.Final)
			INNER JOIN products pro USING(UPC) ";
		if(strlen(trim($where))>0)
			$_query .= " WHERE ".$where;
		#echo $_query;
		return $this->_db->query($_query);
	}

#Activar automaticamente el armado de JSON
	public function json($id = '') {
		if(strlen($id) > 0)
			return $this->_db->query("SELECT id,titulo,fecha,substring(contenido,1,40) FROM articulos WHERE id = :id;", array("id"=>$id));
		else
			return $this->_db->query("SELECT id,titulo,fecha,substring(contenido,1,40) FROM articulos;");
	}
}