<?php
/************************************
* Control de vistas en el Framework *
*************************************
*************************************
Rev:
*************************************
@ivanmiranda: 1.0
@ivanmiranda: 1.0.1: 
	- Soporte de inclusión de archivos adicionales en vistas
	- Armado automático de tabla de datos
************************************/
class Vista {
	private $_header = "";
	private $_footer = "";
	private $_html = "";
	private $_path = "";

	public function __construct() {
		if(DEFAULT_TEMPLATE != '') {
			if(file_exists(APP_PATH.'_vistas/'.DEFAULT_TEMPLATE.'/header.tpl')) {
				$this->_path = APP_PATH.'_vistas/'.DEFAULT_TEMPLATE;
			} else {
				$this->_path = APP_PATH.'_vistas/'.DEFAULT_TEMPLATE;
			}
		} else {
			$this->_path = APP_PATH.'_vistas';
		}
	}

	public function _template($plantilla) {
		if(!file_exists(APP_PATH.'_vistas/'.$plantilla.'/header.tpl')) {
			$this->_path = APP_PATH.'_vistas';
		} else {
			$this->_path = APP_PATH.'_vistas/'.$plantilla;
		}
	}

	#Muestra en pantalla una plantilla
	public function dibuja($vista) {
		if(file_exists($this->_path.'/'.$vista)) {
			$this->_path = dirname($this->_path.'/'.$vista);
		#Leer el contenido del archivo
			$_archivo = @fopen($this->_path.'/'.$vista, 'r');
			$this->_html = fread($_archivo, filesize($this->_path.'/'.$vista));
			fclose($_archivo);
		#Sobreescribir las variables asignadas a la vista para referenciarlas a la plantilla
			foreach (get_object_vars($this) as $_nombre => $_valor ) {
				$$_nombre = $_valor;
			}
		#Procesar las etiquetas de la plantilla
			eval("?>".$this->_html);
		} else {
			throw new FrameworkException("Vista ".$this->_path.'/'.$vista." no existe", 1);
		}
	}

	#Anexar los tokens de seguridad a cada formulario contenido en las plantillas
	private function procesa_form() {
		$this->_html = preg_replace('</form>', 'input type="hidden" name="__token" value="'.Framework::TokenSesion().'"/></form', $this->_html);
	}

	#Arma una tabla de datos en base al arreglo pasado
	private function procesa_tabla($datos, $nombre = "", $clase = "") {
		if(!is_array($datos))
			return false;
		$_header = false;
		$_tabla = "<table id=\"tabla_{$nombre}\" name=\"tabla_{$nombre}\" class=\"{$clase}\" />\n";
		foreach ($datos as $_fila) {
			if(!$_header) {
				$_header = true;
				$_tabla .= "\t<tr>\n";
				$_campos = array_keys($_fila);
				foreach ($_campos as $_campo) {
					$_tabla .= "\t\t<th>{$_campo}</th>";
				}
			}
			$_tabla .= "\n\t</tr>\n\t<tr>\n";
			foreach ($_fila as $_campo => $_valor) {
				$_tabla .= "\t\t<td>{$_valor}</td>";
			}
		}
		$_tabla .= "\t</tr>\n</table>\n";
		return $_tabla;
	}

	#Arma un script de escucha de una tabla para detectar cuando se ha hecho click en un objeto
	private function procesa_escucha_tabla($nombre) {
		$_script = "
		<script>\n
		\t$(\"#tabla_{$nombre}\").delegate(\"tr\", \"click\", function() {\n
		\tvar elementos = $(this).html().trim().split(\"</td>\");\n
		\tfor (i = 0; i < elementos.length; i++) { \n
			\t\telementos[i] = elementos[i].replace(\"<td>\",\"\");\n
			\t\telementos[i] = elementos[i].trim();\n
		\t}\n
		\tescucha_tabla_{$nombre}(elementos);\n
		});
		</script>";
		return $_script;
	}
}
