<?php 
$nombre = $_REQUEST['q1_nombre'];
$email = $_REQUEST['q3_email'];
$celular = $_REQUEST['q4_celular10'];
$ciudad = $_REQUEST['q8_ciudad'];

$to  = 'registro@instyler.com.mx';

$subject = 'Asesoria Instyler';

$message = '<html>
<head>
  <title>Asesoria Instyler</title>
</head>
<body>
	<p>Nombre: <strong>'. $nombre .'</strong></p>
	<p>Email: <strong>'. $email .'</strong></p>
	<p>Celular: <strong>'. $celular .'</strong></p>
	<p>Ciudad: <strong>'. $ciudad .'</strong></p>
</body>
</html>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Registro InStyler <noresponder@instyler.com.mx>' . "\r\n";

if(!empty($nombre) && !empty($email) && !empty($nombre) && !empty($celular) && !empty($ciudad)){
	mail($to, $subject, $message, $headers);
	$mail_enviado = 'mail OK';
}else{
	$mail_enviado = 'mail NOT';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro Instyler</title>

<link href="assets/css/main.css" rel="stylesheet" >

<!-- Google Analitycs -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17539527-13', 'instyler.com.mx');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>
<!-- End Google Analitycs -->

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
	window.$zopim || (function (d, s) {
		var z = $zopim = function (c) {
			z._.push(c)
		}, $ = z.s =
		d.createElement(s), e = d.getElementsByTagName(s)[0]; z.set = function (o) {
			z.set.
			_.push(o)
        }; z._ = []; z.set._ = []; $.async = !0; $.setAttribute('charset', 'utf-8');
		$.src = '//v2.zopim.com/?21C2UQwR3bsgtB8WP0Lh9n92CymfpwBB'; z.t = +new Date; $.
        type = 'text/javascript'; e.parentNode.insertBefore($, e)
            })(document, 'script');
</script>
<!--End of Zopim Live Chat Script-->
</head>

<body>
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/973637480/?label=6LJLCI-XiFsQ6I6i0AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Google Code for Registro Instyler P&aacute;gina Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1068963570;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "zfXcCKSGiFsQ8q3c_QM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1068963570/?label=zfXcCKSGiFsQ8q3c_QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- <?php echo $mail_enviado ;
echo '<p>Nombre: <strong>'. $nombre .'</strong></p>';
echo '<p>Email: <strong>'. $email .'</strong></p>';
echo '<p>Celular: <strong>'. $celular .'</strong></p>';
echo '<p>Ciudad: <strong>'. $ciudad .'</strong></p>';
?> -->

<div class="page_wrapper tnk"><div class="page_hider">
	<img src="assets/images/header_tnk.png" class="header_tnk" />
    <a href="#buy_table" class="buy_table_link"></a>
    <a href="#" onclick="javascript:$zopim.livechat.window.show();" class="open_link"></a>
    
    <div id="buy_table" class="buy_table">
    	<div class="h_product">
        	<div class="img_1">
            	<img src="assets/images/instylermax2way.png" alt="Instyler Max" />
			</div>
            
            <div class="p_text">
                <img src="assets/images/max2way.png" id="max_title" alt="InStyler Max 2 Way" />
                <p>Nueva InStyler® MAX 2 WAY ¡Ahora gira en dos direcciones logrando un trabajo perfecto!<br />
                Peinado SUPERIOR a las demás. 48% Mejores resultados</p>
                
                <div class="product">
                    <div class="product_data">
                        <span class="regalo">+ Tratamiento Capilar ¡GRATIS!</span>
                        <span class="regular">Precio Regular: <span class="num">$4,940</span><span class="ahorra">  Ahorra: <span class="num">$450</span></span></span>
                        <span class="msi">12 Meses Sin Intreses de <span class="num">$262</span></span>
                        <span class="uspd">O un solo pago de <span class="num">$3,145</span></span>
                    </div>
                            
                    <form action="https://instyler.com.mx/comprar.php" method="post">
                        <input type="hidden" name="vars[992989]" value="1" />
                        <button class="button big_button">Comprar</button>
                    </form>
                </div>
            </div>
            
			<div class="img_2">
                <img src="assets/images/instyler-mejor-eleccion.png" />
            </div>
        </div>
      	<div class="product">
			<img src="assets/images/titanium.png" class="product_image" alt="InStyler Titanium" />
                    
			<div class="product_data">
              	<span class="regalo">+ Tratamiento Capilar ¡GRATIS!</span>
                <span class="regular">Precio Regular: <span class="num">$2,799</span>  <span class="ahorra">Ahorra: <span class="num">$450</span></span></span>
				
				<span class="msi">12 Meses Sin Intreses de <span class="num">$195.75</span></span>
				<span class="uspd">O un solo pago de <span class="num">$2,349</span></span>
			</div>
                    
			<form action="https://instyler.com.mx/comprar.php" method="post">
				<input type="hidden" name="vars[149318]" value="1" />
				<button class="button big_button">Comprar</button>
			</form>
		</div>
				
		<div class="product">
			<img src="assets/images/Wet2Dry.png" class="product_image" alt="InStyler Wet2Dry" />
                    
			<div class="product_data">
				<span class="regalo">+ Tratamiento Capilar ¡GRATIS!</span>
                <span class="regular">Precio Regular: <span class="num">$3,499</span>  <span class="ahorra">Ahorra: <span class="num">$450</span></span> </span>
				
				<span class="msi">12 Meses Sin Intreses de <span class="num">$254.08</span></span>
				<span class="uspd">O un solo pago de <span class="num">$3,049</span></span>
			</div>
                    
			<form action="https://instyler.com.mx/comprar.php" method="post">
				<input type="hidden" name="vars[935665]" value="1" />
				<button class="button big_button">Comprar</button>
			</form>
		</div>

		<div class="product">
			<img src="assets/images/ceramic_shells.png" class="product_image" alt="InStyler Ceramic Shells" />
                    
			<div class="product_data">
				<span class="regalo">+ Tratamiento Capilar ¡GRATIS!</span>
                <span class="regular">Precio Regular: <span class="num">$3,044</span>  <span class="ahorra">Ahorra: <span class="num">$450</span></span></span>
				
				<span class="msi">12 Meses Sin Intreses de <span class="num">$212.42</span></span>
				<span class="uspd">O un solo pago de <span class="num">$2,549</span></span>
			</div>

			<form action="https://instyler.com.mx/comprar.php" method="post">
				<input type="hidden" name="vars[198529]" value="1" />
				<button class="button big_button">Comprar</button>
			</form>
		</div>
    </div>
</div>

</body>
</html>
