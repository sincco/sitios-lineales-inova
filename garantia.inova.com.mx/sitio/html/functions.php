<?php

	function load_custom_data() {
		global $sys, $cfg, $cfg_folder, $local;
		
		$file_cfg = "general.ex.cfg";

		if (file_exists($file_cfg)) {
			if ($handle = fopen($file_cfg, 'r')) {
				while (!feof($handle)) {
					list($type, $name, $value) = preg_split("/\||=/", fgets($handle), 3);
					if ($type == 'sys') {
						$sys[$name] = trim($value);
					}elseif ($type == 'conf' or $type == 'conf_local') {
						$cfg[$name] = trim($value);
					}
				}
			}
		}
	}


	
	function connectDB(){
		global $sys, $cfg, $cfg_folder, $local, $db_link;

		## Conectar a base
			$db_link = mysql_connect($cfg['dbi_host'], $cfg['dbi_user'], $cfg['dbi_pw']) or die(mysql_error());
			mysql_select_db($cfg['dbi_db']) or die(mysql_error(). __LINE__);
	}


	function getEnum_values($table, $column)
	{
		$result 	= mysql_query("SHOW COLUMNS FROM $table LIKE '$column';");
		$data 		= mysql_fetch_assoc($result);
		
		$search 	= array('/enum\(/','/\)/','/\'/');
		$replace 	= array('','','');

		$states 	= explode( ',', preg_replace($search, $replace, $data['Type'] ) );

		return $states;
	}



	function filter_values($input)
	{
	    $output = preg_replace("/\'/", "\\'/", $input);
	    return $output;
	}

?>