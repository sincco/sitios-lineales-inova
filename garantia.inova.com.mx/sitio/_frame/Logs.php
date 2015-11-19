<?php
/************************************
* Control de errores en el Framework
*************************************
*************************************
Rev:
*************************************
@ivanmiranda: 1.0
************************************/
class Logs {
	public static function procesa($e) {
		if(DEV_LOG)
			Logs::escribe($e); #Escribir el log de errores
		if(DEV_SHOWERRORS) {
			if(stripos($e->getMessage(), "SQLSTATE") > -1)
				Logs::pantallaBD($e);
			else
				Logs::pantalla($e);
		} else {
			header('HTTP/1.1 500 Internal Server Error');
		}
	}

	private static function escribe($e) {
		$log_file = fopen(DEV_LOGFILE, 'a+');
		fwrite($log_file, date("mdGis").'::'.$e->getMessage()."(".$e->getCode().")\r\n");
		fwrite($log_file, "--> ".$e->getFile()."::".$e->getLine()."\r\n");
		fwrite($log_file, "-->--> ".$e->getTraceAsString()."\r\n\r\n");
		fwrite($log_file,"URL: http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI']."\r\n");
		fwrite($log_file, "SESSION: "."\r\n-->id: ".session_id()."\r\n-->data: \r\n");
		foreach ($_SESSION as $key => $value) {
			fwrite($log_file, "-->-->{$key} = ".$value."\r\n");
		}
		fwrite($log_file, "IP: ".Framework::obtenIP()." - PHP ".phpversion()." - ".PHP_OS."(".PHP_SYSCONFDIR." ".PHP_BINARY.")\r\n");
		fwrite($log_file,"--------------------------------------------\r\n");
		fclose($log_file);
	}

	private static function pantalla($e) {
		echo "<html><head><style>h1{font-family:Arial, Helvetica, sans-serif; font-size:16px;} body{font-family:Courier; font-size:12px;}</style></head>";
		echo "<h1>".$e->getMessage()."(".$e->getCode().")</h1>";
		echo $e->getFile()."::".$e->getLine()."<br/>";
		echo $e->getTraceAsString()."<br/><hr/>";
		echo "URL: http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI']."<br/>";
		echo "SESSION: "."<br/>-->id: ".session_id()."<br/>-->data: <br/>";
		foreach ($_SESSION as $key => $value) {
			echo "-->-->{$key} = ".$value."<br/>";
		}
		echo "<hr/>IP: ".Framework::obtenIP()." - PHP ".phpversion()." - ".PHP_OS."(".PHP_SYSCONFDIR." ".PHP_BINARY.")<br/>";
		echo "<hr/>Simple Framework PHP - ".APP_NAME." - ".APP_COMPANY;
		echo "</html>\n<br>";
	}

	private static function pantallaBD($e) {
		echo "<html><head><style>h1{font-family:Arial, Helvetica, sans-serif; font-size:16px;} body{font-family:Courier; font-size:12px;}</style></head>";
		echo "<h1>".$e->getMessage()."(".$e->getCode().")</h1>";
		echo $e->getFile()."::".$e->getLine()."<hr/>";
		echo "URL: http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI']."<br/>";
		echo "SESSION: "."<br/>-->id: ".session_id()."<br/>-->data: <br/>";
		foreach ($_SESSION as $key => $value) {
			echo "-->-->{$key} = ".$value."<br/>";
		}
		echo "<hr/>IP: ".Framework::obtenIP()." - PHP ".phpversion()." - ".PHP_OS."(".PHP_SYSCONFDIR." ".PHP_BINARY.")<br/>";
		echo "<hr/>Simple Framework PHP - ".APP_NAME." - ".APP_COMPANY;
		echo "</html>\n<br>";
	}
}