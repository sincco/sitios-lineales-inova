<?php
 	require("nsAdmBase.php");
 	require("functions.php");
 	
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
		
		$bodymail="El usuario con celular número: $in[from] escribió:<br>\n$in[body]<br>\n";
		
		$cabeceras_sm  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras_sm .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$cabeceras_sm .= 'From: sales@innovagroupusa.com<sales@innovagroupusa.com>' . "\r\n";
		
		mail('rbarcenas@innovagroupusa.com','Contacto via SMS',$bodymail,$cabeceras_sm);
		mail('cjmendoza@innovagroupusa.com','Contacto vía SMS',$bodymail,$cabeceras_sm);
		mail('confirmaciones_usa@inova.com.mx','Contacto vía SMS',$bodymail,$cabeceras_sm);
	}
 	
	header("content-type: text/xml");
//   	$sth = mysql_query("insert into sl_orders_notes set notes='inserta".print_r($in,1)."'") or die("Query failed : " . mysql_error());
	echo "<?xml version='1.0' ?>\n";
?>
<Response>
	<Sms><?php echo "Gracias por contactarnos, un agente se pondra en contacto con usted pronto";?></Sms>
</Response>