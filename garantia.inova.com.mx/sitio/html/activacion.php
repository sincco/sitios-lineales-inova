<?php

	require("functions.php");
	
	session_start();

	define('DATE_FORMAT_LONG', '%A %d %B, %Y');

	######################################################
	##### Configuration File ############################
	######################################################
	$dir = getcwd();
	list($b_cgibin,$a_cgibin) = strpos( $dir, 'httpdocs' ) !== false ? 	explode('httpdocs',$dir) : explode('cgi-bin/',$dir);
	$cfg_folder = '';

	$mandatory = array('id_warranty','purchase_origin','firstname','lastname1','phone1','email');

	foreach ($_POST as $key => $value ) 
	{
		$value = trim($value);

		if( in_array($key, $mandatory) && $value == '')
		{
			die('incomplete_data');
		}

	}

	$actual_link = "http://$_SERVER[HTTP_HOST]/garantia/";

	load_custom_data();
	connectDB();


	$result = mysql_query("	SELECT count(products.ID_products) as found, products.ID_products, products.Name, products.Logo, ( SELECT folio FROM code_warranty WHERE folio = '".$_POST['id_warranty']."') AS folio
								FROM products WHERE Initial_folio <= '".$_POST['id_warranty']."' AND Final_folio >= '".$_POST['id_warranty']."';");
	$codigo = mysql_fetch_assoc($result);

	if($codigo['found'] >= 0 )
	{
		if( is_null($codigo['folio']) )
		{

			mysql_query("INSERT INTO customers (FirstName, LastName1, LastName2, Sex, Phone1, Cellphone, Email, Address1, Address2, Urbanization, City, State, Zip, Country, 
					Date, Time) VALUES ('".$_POST['firstname']."', '".$_POST['lastname1']."', '".$_POST['lastname2']."', '".$_POST['sex']."', 
					'".$_POST['phone1']."', '".$_POST['cellphone']."', '".$_POST['email']."', '".$_POST['address1']."', 
					'".$_POST['address2']."', '".$_POST['urbanization']."', '".$_POST['city']."', '".$_POST['state']."', 
					'".$_POST['zip']."', '".$_POST['country']."', curdate(), curtime());");

			mysql_query("INSERT INTO code_warranty (purchase_origin, code) VALUES ('".$_POST['id_warranty']."','".$_POST['purchase_origin']."');");

			$msg = 'OK';
		}
		else
		{
			$msg = 'already_registered';
		}
	}else{
		$msg = 'wrong_code';
	}

	echo $msg;

?>
