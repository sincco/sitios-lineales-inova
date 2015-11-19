<?php
	/********************* vars - instyler.com.mx ****************************/

	$mysql_host     				= 		"localhost"; 		// Host name
	$mysql_user     				= 		"direksysmx";		// username
	$mysql_pass     				= 		"D01NksjIw283hsl";	// password
	
	#$mysql_host     				= 		"172.20.27.78"; 		// Host name
	#$mysql_user     				= 		"d2mow"; 				// username
	#$mysql_pass     				= 		"jKSu2&&28GjngbKJSWH*(*289HK";
	
	$dbConnect                      =       "direksys2_e4";	// password
	$id_admin_users					=		4841;
	$failedstatus					=		"Void";
	$customer_status                =       'Retail';
	$cus_default_type				=		"Inova";
    $id_salesorigins                =       26;
    $decimal_digits                 =       2;
	
	## Apprearence
	$maintable_w = "95%";
	
	//Se definen variables adicionales

	$site_domain    					= "hc.instyler.com.mx";
	$site_track    						= "www.hc.instyler.com.mx";
	$site_checkout						= "http://".$site_domain ."/comprar.php";
	$contacts_min						= 0;
	$include_coupon_to_invited			= 1;
    $in									= array();
	$in['e']							= 4;
    $e                                  = 4;
	$va									= array();
	$error								= array();
	$in									= array();
	$mysql_database_order[1] 			= "direksys2_e4";
	$mysql_database_order[2] 			= "direksys2_e4";
	$mysql_database_order[4] 			= "direksys2_e4";
	$url_paymentgateway					= "http://hc.direksys2.com/payworks/globalcollect_paymentsgwmx.php";
	$tmp_data 							= "/home/www/domains/dev.hceja/webs_mx/instyler.com.mx/httpdocs";
	$path_templates						= "/home/www/domains/dev.hceja/webs_mx/instyler.com.mx/cgi-bin/templates2/";
	$path_shoppingcart					= "/home/www/domains/dev.hceja/webs_mx/instyler.com.mx/cgi-bin/shoppingcart/";
	$path_shoppingcart2					= "/home/www/domains/dev.hceja/webs_mx/instyler.com.mx/cgi-bin/shoppingcart2/";
	$path_objects						= 	$path_templates . "objects/";
	$orderfiles							= '/home/www/domains/dev.hceja/webs_mx/instyler.com.mx/orders';
	$salesemail							= "sales@innovagroupusa.com";

	#$data['contact_phone'] 			= "1-888-339-2990";
	#$data['contact_mail']				="contacto@dermawand.com.mx";

	#$data['gmail_username'] 			= "no-responder@instyler.com.mx";//no-responder@eagleeyes.com.mx
	#$data['gmail_passwd'] 				= "75Pz7u6M";

	$data['gmail_username'] 			= "hceja@inovaus.com";
	$data['gmail_passwd'] 				= ".C3j4!:;";


	#$data['sales_mail']       			= "sales@innovagroupusa.com";
	#$data['mail_logo'] 	        	= '<img src="https://www.colageinausa.com/images/logo2.png" alt="Colageina" align="center">';
	#$data['salesname']                 = "Colageina 10";
	#$data['fbpage']					='http://www.facebook.com/pages/Colageina-USA/152608748134243';
	#$data['fbpage_width']				=350;
	#$data['fbpage_layout']				='button_count';
	#$data['contact_form_list']			='Colageina Contact Form';
	#$webim_chat_list					='Colageina Chat';
	#$data['mail_pear_path'] 			='/usr/share/php5/';
	
	$data['final_email_administrators'] = 'hceja@inovaus.com'; #rbarcenas@inovaus.com, chaas@inovaus.com,
	#$promo_iframe="vida_sana_magazine.html";
    $max_retries                        = 3;




    ##Especifica tipos de pagos validos para este sitio
    $paytype_credit_card = true; 
    $paytype_referenced_deposit = true; 
    $paytype_cod = true;

    $limit_payment_cod = 2000;

	# Estatus Iniciales dependientes del Tipo de Pago para sl_orders
	#       Campos:               StatusPrd | StatusPay | Status                      
	$initial_status = array( 
							'Credit-Card'=>array('StatusPrd'=>'None','StatusPay'=>'None','Status'=>'Void'), 
							'COD'=>array('StatusPrd'=>'None','StatusPay'=>'None','Status'=>'New'),
							'Referenced Deposit'=>array('StatusPrd'=>'None','StatusPay'=>'Pending Payment','Status'=>'New')	 
						 	);
	


	
	#Footer overlay
$overlay_footer_use=0;
$overlay_bg_image=array("b.jpg","b.jpg");
$overlay_content_img=array("openinviter/sky.jpg","openinviter/30cuates.jpg");
$overlay_link=array('#ordenAhora','#ordenAhora');
$overlay_order_img=array('b_edit.png','b_edit.png');

	####################################################
	### DO NOT CHANGE BELOW THIS POINT
	####################################################
	$url_website						= "http://$site_domain/";
	$urls_website						= "http://$site_domain/";	

	## Lenguajes del sistema
	if(!isset($in['lang']))    
		$in['lang']='sp';
	$lang_msg=array();
	require_once $path_shoppingcart2."lang_".$in['lang'].".php";

	## Paises
	$countries_tosale									=			array();
	## Productos
	$id_products										=			array();
	$products_prices									=			array();
	$products_shippings									=			array();
	$products_payments									=			array();
	$products_name										=			array();
	$payments_amount=array();
	
	$urlref = array("Google"=>"Google" , "T.V."=>"T.V" , "Facebook"=>"Facebook" , "Yahoo"=>"Yahoo" , "Email"=>"Email" , "Un amigo"=>show_message('friend') , "Otro"=>show_message('other'));
	## Servicios
	$id_services										=			array();
	$services_prices									=			array();
	$services_name										=			array();
	
	## Paises [Se utiliza self en el path para colocar un link a la misma pagina que lo llama]
	$countries_tosale['name']        		=     array("Mexico","USA");
	$countries_tosale['path']        		=     array('https://www.colageinausa.com','self?e=1');
	$countries_tosale['img']         		=     array("mexico","flag4");	

	## Productos USA/PR #new 100175985 #old 100133171
	$id_products[$in['e']]['promo_normal']			= array("100914900","100967508","100787445","100175985","100540099","100228768","100838759","100531118");
	$products_prices[$in['e']]['promo_normal']		= array(29.99,54.99,79.99,99.99,14.99,14.99,54.99,19.99);
	$products_shippings[$in['e']]['promo_normal']	= array(9.99,9.99,9.99,9.99,4.99,4.99,00.00,4.99);
	$products_payments[$in['e']]['promo_normal']	= array(1,1,1,1,1,1,1,1);

	##Promocion USA
	$id_products[1]['promocion']=array("100454184");
	$products_prices[1]['promocion']=array(0.01);
	$products_shippings[1]['promocion']=array(19.98);
	$products_payments[1]['promocion']=array(1);			
	$products_name[1]['promocion']=array("Prueba Gratis Colageina10 por 30 dias");
	$id_services[1]['promocion']=array("600001036");
	$services_prices[1]['promocion']=array(0.00);
	$services_name[1]['promocion']=array("Continuidad Colageina10 30 dias");


	#Coupons
	$coupons['usecoupons']					=	1;
	$sale_min								= 	50;
	$expiration_days_inviter				=	2;
	$expiration_days_invited				=	7;
	$id_products[1]['cupon']				=	array("100285268");
	$products_prices[1]['cupon']			=	array(0.01);
	$products_shippings[1]['cupon']			=	array(0.00);
	$products_payments[1]['cupon']			=	array(1);			
	$products_name[1]						=	array("cupon"=>array("Colageina 1 Mes <span style='color:red;'>REGALO</span>"));
	
	$products_belongsto = 'instyler';

	#Special Price
	$promo_nsc_email='Colageina Special';
	$id_products[1]['email_discount']=array("-1","-1","-1","100175985","-1","-1");
	$products_prices[1]['email_discount']=array(-1,-1,-1,129.99,-1,-1);
	$products_shippings[1]['email_discount']=array(-1,-1,-1,9.99,-1,-1);
	$products_payments[1]['email_discount']=array(1,1,1,1,1,1);
	
	# International Order State for sl_orders.
    $intl_state='XX-Other Country';
	#Reorder
$reorder_use=1;
$reorder_disc=5;
	
	$freeshp=1;
	$geoip_path='/home/www/docs/geoip/';
	$exclude_ips='127.0.0.255';
	// general_tracker();
	
	#Shipping Options
	$shptaxtype='net';
	
#######
####### PayPal
#######

# Sandbox Account : rbarcenas@innovagroupusa.com : innova9003
# Buyer  : gvsauc_1278715645_per@innovagroupusa.com : 278715611
# Seller : rbarce_1278704978_biz@innovagroupusa.com : 278704954

$paypal['go_live']=0;
$paypal['version']='63.0';
$paypal['useraction']=1; // 1-> cliente paga en paypal | cualquier otro numero cliente regresa al website a confirmar los datos
$paypal['fastpay']=1;
$paypal['optpay']=1;

$paypal['sandbox_username']='rbarce_1278704978_biz_api1.innovagroupusa.com';
$paypal['sandbox_password']='1278704985';
$paypal['sandbox_signature']='AIF5t8OtkCJVjsUomqsQZRdlSsUgAFdax7gtD7wOadjAzev6C3rbS.j1';
$paypal['sandbox_api']='https://api-3t.sandbox.paypal.com/nvp';
$paypal['sandbox_url']='https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token=';

$paypal['username']='jestrada_api1.shoplatinotv.com';
$paypal['password']='452UXYEAUYPTF5G7';
$paypal['signature']='A1qAY65lTY5BwKKQ0Dxfr9yMXtjKA7tuAMfpxPGfzO6o5pkYwTl2zpLU';
$paypal['api']='https://api-3t.paypal.com/nvp';
$paypal['url']='https://www.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=';

$cfg['use_sl_products_prices']=1;

function general_tracker($keypoint){
// --------------------------------------------------------
// Forms Involved: 
// Created on: 27 Dec 2010 15:36:16
// Author: MCC C. Gabriel Varela S.
// Description :   
// Parameters :
	global $in,$mysql_database_order,$mysql_host, $mysql_user, $mysql_pass,$geoip_path,$exclude_ips;
	
	//Identifica si la IP se omitirá
	if(preg_match("/$_SERVER[REMOTE_ADDR]/",$exclude_ips))
	{
		return;
	}
	
	include($geoip_path."geoipcity.inc");
	include($geoip_path."geoipregionvars.php");

// uncomment for Shared Memory support
// geoip_load_shared_mem("/usr/local/share/GeoIP/GeoIPCity.dat");
// $gi = geoip_open("/usr/local/share/GeoIP/GeoIPCity.dat",GEOIP_SHARED_MEMORY);

	$gi = geoip_open($geoip_path."GeoLiteCity.dat",GEOIP_STANDARD);
	// $record = geoip_record_by_addr($gi,"24.24.24.24");
	$record = geoip_record_by_addr($gi,$_SERVER['REMOTE_ADDR']);

	geoip_close($gi);
	
	//echo "<!--".$_SERVER['HTTP_USER_AGENT'] . "-->\n\n";
	$values=get_browser(null,true);
	$user_agent='';
	$user_agent=$values['platform'].':'.$values['parent'];
	if($user_agent=='')
	{
		$user_agent=$_SERVER['HTTP_USER_AGENT'];
	}
	
// 	echo "<!--";
// 	print_r(get_browser(null,true));
// 	echo "-->";
	
	mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die(mysql_error());
	mysql_select_db($mysql_database_order[$in['e']]) or die(mysql_error());
	$sth = mysql_query("insert into innovausa.nsc_general_tracker set 
	Host='".$_SERVER['HTTP_HOST']."',
	user_agent='".$user_agent."',
	accept_language='".$_SERVER['HTTP_ACCEPT_LANGUAGE']."',
	accept_encoding='".$_SERVER['HTTP_ACCEPT_ENCODING']."',
	accept_charset='".$_SERVER['HTTP_ACCEPT_CHARSET']."',
	referer='".$_SERVER['HTTP_REFERER']."',
	server_name='".$_SERVER['SERVER_NAME']."',
	remote_address=inet_aton('".$_SERVER['REMOTE_ADDR']."'),
	redirect_query_string='".$_SERVER['REDIRECT_QUERY_STRING']."',
	redirect_url='".$_SERVER['REDIRECT_URL']."',
	query_string='".$_SERVER['QUERY_STRING']."',
	request_uri='".$_SERVER['REQUEST_URI']."',
	script_name='".$_SERVER['SCRIPT_NAME']."',
	/*php_self='".$_SERVER['PHP_SELF']."',*/
	keypoint='".$keypoint."',
	ID_orders='".$in['id_orders']."',
	city='".$record->city."',
	state='".$record->region."',
	zipcode='".$record->postal_code."',
	Date=curdate(),
	Time=curtime()") or die("Query failed : " . mysql_error());

}

function show_message($msg_code){
# --------------------------------------------------------
	global $lang_msg,$in;
	if($lang_msg[$msg_code]!="")
		return $lang_msg[$msg_code];
	return "Not message found.";
}

?>
