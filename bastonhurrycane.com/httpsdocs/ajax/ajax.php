<?php

$dir = getcwd();

	list($b_cgibin,$a_cgibin) = strpos( $dir, 'httpsdocs' ) !== false ?
		explode('httpsdocs',$dir) :
		explode('cgi-bin/',$dir);

	$cfg_folder = $b_cgibin;

	require_once $cfg_folder."/cgi-bin/vars.".php_uname('n').".php";
	require_once($cfg_folder."/cgi-bin/shoppingcart2/functions.php");

switch ($_REQUEST['cmd'])
{
    case 'zip':
        echo getZip(trim($_REQUEST['zip']));
        break;
    case 'msi':
        echo getPriceMSI();
        break;
}

function getPriceMSI()
{
    global $cfg, $in, $cses, $sys;
    $cses['msi'] = $in['msi'];
    save_callsession(0);
    $msi = ($cses['msi'] / 100) + 1;
    $nprecio = ($cses['total_i'] * $msi) + $cses['shipping_total'];
    //$json = array("PrecioMSI" => $nprecio);
    //$json = json_encode($json);
    return '$' . number_format($nprecio, 2);
    
    //print_r($cses);
}


function getZip($zip)
{
    header('Content-Type: application/json');
	connectDB();
    $sql = "select StateFullName, City from sl_zipcodes where ZipCode = " .
        mysql_real_escape_string($zip) . " LIMIT 1";
    $query = mysql_query($sql) or die (mysql_error());
    $array = mysql_fetch_array($query);
    $json = array("StateFullName" => $array['StateFullName'], "City" => $array['City']);
    $json = array_map('utf8_encode', $json);
    $json = json_encode($json);
    return $json;
}

?>