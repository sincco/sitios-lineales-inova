<?php
	
	require_once $_SERVER["DOCUMENT_ROOT"]."/../cgi-bin/vars.".php_uname('n').".php";
	require_once($path_shoppingcart2."functions.php");
	//load_ordersession();
    if(empty($_SESSION['id_orders'])){
        header("LOCATION: /");
    }
    
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"   "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://opengraphprotocol.org/schema/"
      xmlns:fb="http://www.facebook.com/2008/fbml"
      xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Language" content="es-mx">
	<META NAME="Author" CONTENT="ArielAleXCo."> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php include ("SEheader.php");?>



<script type="text/javascript">


  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17539527-13']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_addTrans',
    '<?=	$_SESSION["id_orders"];	?>',   // transaction ID - required
    '<?= $products_belongsto; ?>',      // affiliation or store name
    '<?= $_SESSION["total_order"] ?>',  // total - required
    '',                                 // tax
    '<?= $_SESSION["shipping_order"] ?>',// shipping
    '<?=$_SESSION["city"]?>',           // city
    '<?=$_SESSION["state"]?>',          // state or province
    'Mexico'                            // country
  ]); 

   // add item might be called for every item in the shopping cart
   // where your ecommerce engine loops through each item in the cart and
   // prints out _addItem for each
     <?= productsAnalytics();?>
  
  _gaq.push(['_trackTrans']); //submits transaction to the Analytics servers

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



		<table  width=100% style="max-width:900px;" cellspacing=0 cellspacing=0 align=center border=0>
			<tr>
				<td  align=left valign=top>	
					<div id="ShopCart">
						<span class="formerror"><?=$error['id_products01'];?></span>
						<p class="formerror" style="font-size:18px;"></p>
						<?php
							$in['step_final'] = checkOrder($idOrder);
							require_once( $path_shoppingcart2 . $in['step_final']);
							session_destroy();
							session_unset();
						?>
							
						<!--
						/denied_order.php
						/process_order.php
						-->
					</div>
 				</td>
 			</tr>
 		</table>
		<br><br><br>
		<?php include ("SEfooter.php");?>
	</body>
</html>