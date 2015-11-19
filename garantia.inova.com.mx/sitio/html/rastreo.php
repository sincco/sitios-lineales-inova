<?
	require("functions.php");
	
	session_start();

	#########################################################
	#### INIT System Data
	#########################################################
	$in  = array();
	$va  = array();
	$trs = array();
	$usr = array();
	$sys = array();
	$cfg = array();
	$tpl = array();
	$cses= array();
	$error= array();
	$device=array();

	define('DATE_FORMAT_LONG', '%A %d %B, %Y');

	######################################################
	##### Configuration File ############################
	######################################################
	$dir = getcwd();
	list($b_cgibin,$a_cgibin) = strpos( $dir, 'httpdocs' ) !== false ?
		explode('httpdocs',$dir) :
		explode('cgi-bin/',$dir);
	$cfg_folder = '';

	$in  = array();

	// Load Data
	foreach ($_POST as $key=>$value ) {
		if (array_key_exists(strtolower($key), $in)){
			$in[strtolower($key)] .= "|$value";
		}else{
			$in[strtolower($key)] = $value;
		}
		//print "$key : $value<br>";
	}
	$in{'fullquery'} = getenv(QUERY_STRING);


	$actual_link = "http://$_SERVER[HTTP_HOST]";



	if( $_SESSION['random_number'] != strtolower($in['captcha']))
	{
		$_SESSION['error'] = 'captcha';
		$_SESSION['email'] = $in['email'];
		$_SESSION['id_orders'] = $in['id_orders'];
		
		header("Location: ".$actual_link);
	}else{
		unset($_SESSION['id_orders']);
		unset($_SESSION['email']);
		unset($_SESSION['error']);
	}

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  
 "http://www.w3.org/TR/html4/loose.dtd">
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1" />
		<title>Tracking de Pedidos</title>
<link rel="stylesheet" type="text/css"href="img/estilos.css" />	

	<!-- Add jQuery library -->
	<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}


	</style>
	</head>
	
	<body>

		<div style="background-color:#111111;"> 
			<div style="width:100%;max-width:900px; margin-left: auto ;  margin-right: auto ;text-align:left;">
				<a href="<?= $actual_link ?>"><img src="img/logo2.png" height="90px" style="margin:10px;margin-bottom:25px; border:none;"></a>
			</div>
		</div>

	<div  class="main">	
		<h1>Rastrea tu Pedido</h1>
		<hr>
		
<?																																														   
							   

	$in['id_orders'] = trim($in['id_orders']);

	if( isset($in['id_orders']) && strlen($in['id_orders']) == 7 )
	{
		if($in['id_orders'] >= 9000000 && $in['id_orders'] <= 9999999)
		{
			$e_data = 2;
		}
		elseif( $in['id_orders'] >= 6000000 && $in['id_orders'] <= 6999999)
		{
			$e_data = 4;
		}
	}



	if( isset($e_data) )
	{
		######################################################
		##### Load Paths and URLs ############################
		######################################################
		load_custom_data($e_data);

		connectDB();

		$result = mysql_query("select *, (select email from sl_customers where ID_customers=sl_orders.ID_customers) email from sl_orders where id_orders='".$in['id_orders']."' and id_salesorigins != '14';");
		$va = mysql_fetch_array($result);

		if( $va )
		{

			if( $va['Status'] == 'Shipped' )
			{
				$sql = ("select tracking, shpprovider from sl_orders_products where id_orders='".$in['id_orders']."' and shpprovider is not null and tracking is not null group by tracking;" );
				$result_shp = mysql_query($sql); 
			}
			
			$in['email'] = filter_values(mysql_escape_string( $in['email'] ));

			if($va['email'] == '')
			{
				mysql_query("UPDATE sl_customers SET email='".$in['email']."' WHERE ID_customers = '".$va['ID_customers']."';");
			}else{
				mysql_query("INSER INTO sl_customers_notes (ID_customers, Notes, Type,  Date,  Time,  ID_admin_users) VALUES('".$va['ID_customers']."', 'Correo brindado al solicitar el status', 'Low', CURDATE(), CURTIME(), '".$va['id_admin_users']."');");
			}
		}
	}

	if( !isset($e_data) || $va['Status'] == 'System Error' || $va == false)
	{
		echo "<font size=4><b><font color='#aaaaaa'>No. de Orden:</font>". $in['id_orders'] ."</b></font><br><br>";
		echo "<font color=red size=4><b>Ese numero de orden no existe.</b></font>";
		echo "</div></body></html>";
		mysql_close($db_link);
		die();
	}
?>



<table align=right style="position:relative;top:65px;"><td><a class="fancybox fancybox.iframe" href="leyendas.html">¿Qué significa?</a></td></table>
<font size=4><b><font color="#aaaaaa">No. de Orden:</font> <?= $va['ID_orders'] ?></b></font>
<img src=img/<?= $va['Status'] ?>.png title="<?= $va['Status'] ?>" alt="<?= $va['Status'] ?>" width=100%>

Destino <b><?= $va['shp_State'] ?> </b> C.P. <b><?= $va['shp_Zip'] ?></b><br>
Fecha <b><?= $va['Date'] ?> </b><br><br>
<?php
	if($va['Status'] == 'Shipped' ){

		$url_tracking['estafeta'] = '<a href="http://rastreo3.estafeta.com/RastreoWebInternet/consultaEnvio.do?&method=&forward=&idioma=es&pickUpId=&dispatch=doRastreoInternet&tipoGuia=ESTAFETA&guias=#GUIA#" target="blank">';
		$url_tracking['fedex'] = '<a href="https://www.fedex.com/fedextrack/?tracknumbers=#GUIA#&locale=es_MX" target="blank">';
		$url_tracking['ups'] = '<a href="http://wwwapps.ups.com/WebTracking/track?loc=en_MX&tbifl=1&tracknum=#GUIA#&track.x=Track&trackSelectedOption=" target="blank">';
		

		while( $shipments = mysql_fetch_assoc($result_shp ) ) {

			$shipments['shpprovider'] = strtolower($shipments['shpprovider']);
			
			if($shipments['shpprovider'] =='estafeta' || $shipments['shpprovider'] =='fedex' || $shipments['shpprovider'] == 'ups'){
				$link_tracking = str_replace('#GUIA#', $shipments['tracking'], $url_tracking[$shipments['shpprovider']]) . $shipments['tracking'] . '</a>' ;
			}else{
				$shipments['shpprovider'] = 'driver';
				$link_tracking = $shipments['tracking'];
			}
			
			echo ('<img src="img/'.$shipments['shpprovider'].'on.jpg" style="vertical-align:middle;" /><br>Número de Rastreo <b>'.$link_tracking.'</b><br> '); 
		}
		
	}
	
	mysql_close($db_link);
?>
<br>

<center>
	<div style="border: 1px solid #fbca6b; padding: 15px; background-color:#fdfdb3;margin-top:5px;width:90%;max-width:340px;">
		Para más información marque al:  <br>
		<font size=4><b>Tel. 01 (55) 10872577</b></font>
	</div>
	<br><br>
<center>

<a class="fancybox fancybox.iframe" href="privacidad.html">Politíticas de Privacidad</a>
			

	</div>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51145920-1', 'inova.com.mx');
  ga('send', 'pageview');

</script>

	</body>
</html>