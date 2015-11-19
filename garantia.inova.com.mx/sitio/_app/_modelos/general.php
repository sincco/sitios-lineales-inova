<?php
class generalModelo extends Modelo {
	public function getEnum($tabla,$columna) {
		$_datos = $this->_db->query("SHOW COLUMNS FROM {$tabla} LIKE '{$columna}';");
		return explode( ',', preg_replace(array('/enum\(/','/\)/','/\'/'), array('','',''), $_datos[0]['Type']));
	}
}