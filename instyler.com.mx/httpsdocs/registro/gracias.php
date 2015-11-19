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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>InStyler | Siempre Lista</title>

<link href="assets/css/framework.css" rel="stylesheet"  />
<link href="assets/css/main.css" rel="stylesheet"  />

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

<body class="tnk_page">

d
<noscript>
<div style="display:inline;">
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
?> 
    
    -->
<div class="px1000">
    <section id="section_1" class="ingrid-12" style="height: 1600px;">
    	<div class="inner_px">
            <div id="form_wrapper">
                <a href="#buy_section"><img src="assets/images/circle_gracias.png" id="form_circle" /></a>
            </div>
		</div>
	</section>
</div>

<div id="buy_section" class="buy_table">
	<div class="px1000">
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
                    <span class="regalo">+ Ionic Styler ¡GRATIS!</span>
                    <span class="regular">Precio Regular: <span class="num">$3,595</span><span class="ahorra">  Ahorra: <span class="num">$450</span></span></span>
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
              	<span class="regalo">+ Ionic Styler ¡GRATIS!</span>
                <span class="regular">Precio Regular: <span class="num">$4,144</span>  <span class="ahorra">Ahorra: <span class="num">$1,795</span></span></span>
				
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
				<span class="regalo">+ Ionic Styler ¡GRATIS!</span>
                <span class="regular">Precio Regular: <span class="num">$4,844</span>  <span class="ahorra">Ahorra: <span class="num">$1,795</span></span> </span>
				
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
				<span class="regalo">+ Ionic Styler ¡GRATIS!</span>
                <span class="regular">Precio Regular: <span class="num">$4,344</span>  <span class="ahorra">Ahorra: <span class="num">$1,795</span></span></span>
				
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
            
            <div id="garantia"><div class="px1000" style="max-width:800px">
    
                <div class="ingrid-4 center_content">
                    <img src="assets/images/sello_garant.png" />
                </div>
                
                <div class="ingrid-8">
                    <h2>Garantía de Satisfacción Total</h2>
        
                    <p>Inova cuenta con mas de 20 años en el mercado ofreciendo la mejor calidad en los artículos del mercado de venta directa por TV. Adquiriendo nuestros productos hace una excelente inversión en usted y su familia.</p>
        
                    <p>Pensando en usted, Inova también le brinda de manera gratuita, la Garantía de Satisfacción Total. Si por alguna razón usted no se encuentra satisfecho con su adquisición, de una manera fácil y sencilla puede realizar un cambio del producto o la devolución de su dinero.</p>
                </div>
                
            </div></div><!-- GARANTIA -->
            
            <div id="guia"><div class="px1000" style="max-width:950px">
				
                <h1>Guía y Videos</h1>
                
                <div class="videos_grid">
                	<div class="grid_section">
                    	<iframe src="http://www.youtube.com/embed/5Qjfu0FbXjY?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="355" height="210" frameborder="0"></iframe>
                        <span>Tutorial InStyler</span>
                    </div>
                    <div class="grid_section">
                    	<iframe src="http://www.youtube.com/embed/JzHY4LKbrbs?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="355" height="210" frameborder="0"></iframe>
                        <span>Preguntas Frecuentes</span>
                    </div>
                    <div class="grid_section">
                    	<iframe src="http://www.youtube.com/embed/kmiFbkNH1SA?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="355" height="210" frameborder="0"></iframe>
                        <span>Tutorial Wet 2 Dry</span>
                    </div>
                    <div class="grid_section">
                    	<a href="http://instyler.com.mx/InStyler-Guia-de-peinados.pdf" download="download">
                    		<img src="assets/images/guia_instyler.png" alt="Descarga la Guía" />
                        </a>
                    </div>
                </div>
                
            </div></div>

			<div id="medios" class="ingrid-12" style="margin-top:40px"><div class="px1000" style="max-width:1100px">

                <div class="ingrid-12 center_content hidden_mobile">
                    <img src="assets/images/revistas.png" />
                </div>
            
            </div></div>

</div>

</body>
</html>