<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

	######################################################
	##### Configuration File ############################
	######################################################
	$dir = getcwd();

	list($b_cgibin,$a_cgibin) = strpos( $dir, 'httpsdocs' ) !== false ?
		explode('httpsdocs',$dir) :
		explode('cgi-bin',$dir);

	$cfg_folder = $b_cgibin;
	
    require_once($cfg_folder."cgi-bin/shoppingcart2/class/sql.class.php");	
	require_once $cfg_folder."cgi-bin/vars.".php_uname('n').".php";
	require_once($cfg_folder."cgi-bin/shoppingcart2/functions.php");

    validateForm();

    if( count($_POST) == 0)
    {
    	header('Location: http://bastonhurrycane.com/checkout.html');
    }

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"   "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://opengraphprotocol.org/schema/"
      xmlns:fb="http://www.facebook.com/2008/fbml"
      xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Language" content="es-mx">
<META NAME="Author" CONTENT="AriAlexVicHuitCo."> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include ("SEheader.php");?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17539527-37', 'bastonhurrycane.com');
  ga('send', 'pageview');

</script>


<table  width=100% style="max-width:900px;" cellspacing=0 cellspacing=0 align=center border=0>
<td  align=left valign=top>	
	<div id="ShopCart">
		<span class="formerror"><?=$error['id_products01'];?></span>
	<p class="formerror" style="font-size:18px;"></p>
						<?php
							if( isset($_POST['email'])  ){
								#load_customer_data($_POST['email']);
								catch_user_data('', $_POST['email'], '', '', $site_domain);
								require_once( $cfg_folder."/cgi-bin/shoppingcart2/shopping_order.php");
							}else{
								require_once( $cfg_folder."/cgi-bin/shoppingcart2/paso1email.php");
							} 
						?>							
	</div>
	<script>

		DrawDiv('shp_info_3_int','100%','','','0,0,0,0',0);
		DrawDiv('shp_info_3_1','100%','','','0,0,0,0',0);

	</script>
	
	<!--
	<script>
		DrawDiv('ShopCart','429px','left','','-35px,0,0,0',1);
		DrawDiv('accordion','100%','left','both','0,0,0,0',1);
		DrawDiv('shp_promo','100%','left','both','0,0,0,0',1);
		DrawDiv('shp_info','100%','left','both','-10px,0,0,0',1);
		DrawDiv('shp_cupon','100%','left','both','0,0,0,0',0);
		DrawDiv('shp_bag','95%','left','both','10px,0,0,2.5%',1);
		DrawDiv('shp_info_3_int','100%','','','0,0,0,0',0);
		DrawDiv('shp_info_3_1','100%','','','0,0,0,0',0);
	</script>
	-->
</div>
</td></table>
<br><br><br>
<?php include ("SEfooter.php");?>
</body>
</html>