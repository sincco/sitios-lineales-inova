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
// 	echo set_coupon_external('3','','',5,$minimum_external[5],'www.innovashop.tv/gift_sms')."<br>";
// // 	echo (4 % 4)."<br>";
// // 	echo (3 % 4)."<br>";
// // 	echo (2 % 4)."<br>";
// // 	echo (1 % 4)."<br>";
// // 	echo (0 % 4)."<br>";
// 	return;

    // Include the PHP TwilioRest library
    require "twilio.php";
     
    // Twilio REST API version
    $ApiVersion = "2010-04-01";
 
    // Set our AccountSid and AuthToken
    $AccountSid = "ACab28583e662dcbf859ad7c0bf28d79b3";
    $AuthToken = "454323a547b60b63f55faa44849959cc";
 
    // Instantiate a new Twilio Rest Client
    $client = new TwilioRestClient($AccountSid, $AuthToken);
 
    // make an associative array of server admins
    $people = array(
        "7024150544"=>"7024150544",
"4848095924"=>"4848095924",
"4106249335"=>"4106249335",
"8155055787"=>"8155055787",
"2148547074"=>"2148547074",
"2148817818"=>"2148817818",
"2147158065"=>"2147158065",
"2146078480"=>"2146078480",
"9803288215"=>"9803288215",
"9563424185"=>"9563424185",
"9045543263"=>"9045543263",
"3054672615"=>"3054672615",
"9563424185"=>"9563424185",
"9512964397"=>"9512964397",
"8058901699"=>"8058901699",
"9802009997"=>"9802009997",
"3134240913"=>"3134240913",
"4693353497"=>"4693353497",
"9723588145"=>"9723588145",
"7608990114"=>"7608990114",
"3134240913"=>"3134240913",
"2139092084"=>"2139092084",
"6269230249"=>"6269230249",
"9727488756"=>"9727488756",
"8173171009"=>"8173171009",
"8052481918"=>"8052481918",
"4694466857"=>"4694466857",
"7143910850"=>"7143910850",
"7135843055"=>"7135843055",
"7862004423"=>"7862004423",
"9092324439"=>"9092324439",
"6822215143"=>"6822215143",
"2148593338"=>"2148593338",
"4093384907"=>"4093384907",
"2106072643"=>"2106072643",
"3234455131"=>"3234455131",
    );
 
    // Iterate over all our server admins
    foreach ($people as $number => $name) {
 
        // Send a new outgoinging SMS by POST'ing to the SMS resource */
        // YYY-YYY-YYYY must be a Twilio validated phone number
        $response = $client->request("/$ApiVersion/Accounts/$AccountSid/SMS/Messages",
            "POST", array(
            "To" => $number,
            "From" => "760-547-7777",
            "Body" => "Felicitaciones! Su regalo lo puede pedir en www.innovashop.tv/sms o llamandonos al 888-448-7762 y usando esta clave ".set_coupon_external('3','','',5,$minimum_external[5],'www.innovashop.tv/gift_sms')
        ));
        if($response->IsError)
            echo "Error: {$response->ErrorMessage}";
        else
            echo "Sent message to $name";
    }
 
?>