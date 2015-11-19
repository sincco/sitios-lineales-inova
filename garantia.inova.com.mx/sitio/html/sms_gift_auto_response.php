<?php
 	require("nsAdmBase.php");
 	require("functions.php");
 	
 	 mysql_pconnect ($cfg['dbi_host'], $cfg['dbi_user'], $cfg['dbi_pw']) or die("Error en conexión ".mysql_error()."$cfg[dbi_host], $cfg[dbi_user], $cfg[dbi_pw]");
mysql_select_db ('innovausa') or die("Error en selección ".$cfg['dbi_db']." ".mysql_error());
	
function promocode_generate($ini=0) {
# --------------------------------------------------------
    $p1=0;
    $p2=0;
    $p3=0;
    $c =0;
    mt_srand(make_seed());
    
    $c = (intval(mt_rand(1000000000,mt_getrandmax())) + 1) .  (intval(mt_rand(1000000000,mt_getrandmax())) + 1).  (intval(mt_rand(1000000000,mt_getrandmax())) + 1);
    $p1 = substr($c,0,5); 
    $p2 = substr($c,7,5); 
    $p3 = substr($c,8,3);
//     print promocode_dv($p1). $p1. promocode_dv($p1.$p2). $p2. promocode_dv($p2) . $p3 ." ";
    return substr((promocode_dv($p1). $p1. promocode_dv($p1.$p2). $p2. promocode_dv($p2) . $p3),0,5);
}

function promocode_dv($input=0,$tot=0) {
# --------------------------------------------------------
   
    $lg = strlen($input);
    
    for ($i=0;$i <= $lg; $i++){
        $tot += ord(substr($input,$i,1)) + ord(substr($input,$i+1,1)) - 30 - $i;
    }
    $dv = intval(($tot/11-intval($tot/11))*11);
    ($dv==10) and ($dv=0);
    return $dv;
}

function make_seed(){
# --------------------------------------------------------	
  list($usec, $sec) = explode(' ', microtime());
  return (float) $sec + ((float) $usec * 100000);
}

function set_coupon_external($cp_expiration=0,$cp_idpromo='',$cp_percentage=0,$cp_maxdiscount=0,$cp_minexternal=0,$cp_externalurl=''){
#-----------------------------------------
# Created on: 05/12/2010  12:05:02 By  Roberto Barcenas
# Forms Involved: 
# Description : Creates new coupon
# Parameters :

	global $cfg;
	$coupon_value = 0;
	$count=1;
	$query='';
	$flag=0;
	

	while ($flag==0 and $count < 300){
		$coupon_value = promocode_generate($coupon_value);
		$query_sc = "SELECT COUNT(*) FROM sl_coupons_external WHERE coupon_value = '$coupon_value';";
		$sth = mysql_query($query_sc);
		if (mysql_num_rows($sth) == 0 /*and strlen($coupon_value) == 16*/){
			$flag = 1;
			break;
		}
		
		if($count%100 == 1){
			$coupon_value=0;
		}
		++$count;
	}

#	$coupon_value = &promocode_generate($coupon_value);
	if($coupon_value){
		$query='';
		if($cp_externalname != ''){
			$query .= " name_external= '$cp_externalname' , ";
		}

		if($cp_expiration == '' or $cp_expiration == 0){
			$cp_expiration = 30;
		}
		$query .= " expiration= DATE_ADD(CURDATE(), INTERVAL $cp_expiration day),";
		
		
		$products=array('100469900','100156483','100711815','100719445');
		$cp_idpromo=$products[($coupon_value%4)];
		if($cp_idpromo != '' and strlen($cp_idpromo) >= 6){
			$query .= " ID_promo = $cp_idpromo ,";
		}

		if($cp_percentage != '' and $cp_percentage > 0){
			$query .= " percentage = $cp_percentage ,";
		}

		if($cp_maxdiscount != '' and $cp_maxdiscount > 0){
			$query .= " maxdiscount = $cp_maxdiscount , ";
		}

		if($cp_minexternal !='' and $cp_minexternal > 0){
			$query .= " minimum_external = $cp_minexternal , ";
		}

		if($cp_externalurl != ''){
			$query .= " url_external = '$cp_externalurl' , ";
		}
		
		
		

		$queryc = "INSERT INTO sl_coupons_external SET coupon_value = '$coupon_value', $query Status='Active',Date=CURDATE(), Time=CURTIME(),ID_admin_users='$cfg[id_admin_users]';";
		$sth=mysql_query($queryc) or die("Insert Error:" . mysql_error());
		if(mysql_affected_rows()== 1)
		    return $coupon_value;
		else
		    return -12;
		
	}
	return -11;
}

	$minimum_external=array(5=>30,10=>50,15=>60,20=>70);
 	
 	//Pasa todos los requests a in
 	foreach ($_REQUEST as $key=>$value ) {
		$in[strtolower($key)] = $value;
		if (strtolower($key) != 'help'){
			$in[thisurl] .= strtolower($key)."=$value&";
		}
	}
	
	//look for customers with the same cellphone
// 	$sth = mysql_query("Select * from sl_customers where right(cellphone,10)=right($in[from],10)") or die("Query failed : " . mysql_error());
// 	while ($rec = mysql_fetch_assoc($sth))
// 	{
// 		$customers.="ID:$rec[ID_customers]<br>\nName: $rec[FirstName]<br>\nLast Name: $rec[LastName1]<br>\n";
// 	}
	if(isset($in['from']) and $in['from']!='' and isset($in['body']) and $in['body']!='')
	{
		
		#it looks for the customers
		$sth = mysql_query("Select ID_orders
		from sl_customers 
		inner join sl_orders on sl_customers.ID_customers=sl_orders.ID_customers
		where right(cellphone,10)=right($in[from],10) 
		order by ID_orders desc
		limit 1") or die("Query failed : " . mysql_error());
		$rec = mysql_fetch_assoc($sth);
		mysql_query("Insert into sl_orders_notes 
		set ID_orders='$rec[ID_orders]',
		Notes='El usuario con celular número: $in[from] escribió:<br>\n$in[body]<br>\n',
		Type='Low',
		Date=curdate(),
		Time=curtime(),
		ID_admin_users='1'") or die("Query failed : " . mysql_error());
		
		$bodymail="Éste correo es para usuarios que piden regalo vía SMS.<br>\nEl usuario con celular número: $in[from] escribió:<br>\n$in[body]<br>\n";
		
		$cabeceras_sm  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras_sm .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$cabeceras_sm .= 'From: sales@innovagroupusa.com<sales@innovagroupusa.com>' . "\r\n";
		
		mail('rbarcenas@innovagroupusa.com','Gift via SMS',$bodymail,$cabeceras_sm);
		mail('cjmendoza@innovagroupusa.com','Gift vía SMS',$bodymail,$cabeceras_sm);
		mail('confirmaciones_usa@inova.com.mx','Gift vía SMS',$bodymail,$cabeceras_sm);
	}
 	
	header("content-type: text/xml");
//   	$sth = mysql_query("insert into sl_orders_notes set notes='inserta".print_r($in,1)."'") or die("Query failed : " . mysql_error());
	echo "<?xml version='1.0' ?>\n";
?>
<Response>
	<Sms><?php echo "Felicitaciones! Su regalo lo puede pedir en www.innovashop.tv/sms o llamandonos al 888-448-7762 y usando esta clave ".set_coupon_external('3','','',5,$minimum_external[5],'www.innovashop.tv/gift_sms');
?></Sms>
</Response>