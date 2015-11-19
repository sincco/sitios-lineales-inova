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

<link href="assets/css/form.css" rel="stylesheet"  />

<link href="assets/css/framework.css" rel="stylesheet"  />
<link href="assets/css/main.css" rel="stylesheet"  />
</head>

<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PV6CDB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PV6CDB');</script>
<!-- End Google Tag Manager -->

<!-- Google Code for Registro Instyler P&aacute;gina Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 973637480;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "6LJLCI-XiFsQ6I6i0AM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
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
        <section id="section_1" class="ingrid-12">
        <div class="ingrid-12">
        <img src="assets/images/logo.png" alt="Instyler" id="main_logo" class="float-left" />
        <a id="phone" href="tel:018004668209"><img src="assets/images/invoa_tel.png" alt="Llama ahora" class="float-right" /></a>
        </div>
        
        <div class="ingrid-12 align-right">
        <img src="assets/images/siempre_lista.png" alt="Siemplre Lista" id="siempre_lista" />
        </div>
    
        <div id="form_wrapper" class="ingrid-12 align-center">
        	<img src="../assets/images/circle_gracias.png" id="form_circle" />
            
            <div class="gracias_text">
                
                	Llámanos hoy mismo y obtén tu InStyler + Cepillo Ionic Styler Gratis<br />
                    <span>
                    01800 466 8209 del Interior de la República<br />
                    o<br />
                    al 55 27896989 del Área Metropolitana.<br />

					O también puedes contactarnos vía Chat haciendo <a onclick="javascript:$zopim.livechat.window.show();">clic aquí.</a><br />
					</span>
                    
					Y un asesor se pondrá en contacto a la brevedad.
                
                </div>
            
        </div>
        
        <div id="after_form" class="ingrid-12">
            <img src="assets/images/seal.png" alt="Siemplre Lista" id="seal" />
            
            <div id="description">
                <p>InStyler es el único accesorio de belleza en el mundo con el exclusivo sistema <br />
                STRAIGHT TO LOOK, que te da la seguridad, control y confianza que necesitas para tu día. <br />
                Gracias a su novedosa tecnología que combina el  barril rotatorio  que pule tu cabello, la plancha<br />
                flotante que  transmite el calor y el cepillo con cerdas que estiliza, puedes confiarle tu peinado a InStyler<br />
                sin maltratar tu cabello.<br /><br />

				Crea lacios firmes, ondula, riza o da volumen a tu cabello, con InStyler puedes estar segura que llegarás igual <br />que como saliste de casa.<br /><br />

Obtén los mejores resultados sin dañar tu cabello, luce un cabello más suave y con mucho más brillo, olvídate del frizz y  logra distintos tipos de peinado,  InStyler deja tu cabello como a ti te gusta.
                </p>
            </div>
            
            <img src="assets/images/bullets.png" alt="Siemplre Lista" id="bullets" />
    
            <a href="http://instyler.com.mx" id="compra_hoy"><img src="assets/images/compra_hoy.png" alt="Consigue tu instyler ahora"  /></a>
            <img src="assets/images/planchas.png" id="planchas" />
            
            <div class="ingrid-6 align-center">
            	<img src="assets/images/medios_title.png" alt="Siemplre Lista" id="medios_title" />
            </div>
            
            <div class="ingrid-6">
                <div id="video">
                    <img src="assets/images/video_over.png" id="video_over" />
                    <iframe src="http://www.youtube.com/embed/fjhuKp_yewU?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="410" height="245" frameborder="0"></iframe>
                </div>
            </div>
            
            <div class="ingrid-6">
            	<img src="assets/images/glamur.png" id="glamur" />
            </div>
            <img src="assets/images/revistas.png" id="revistas" />
            
            <footer id="footer" class="ingrid-12">
            	<div class="ingrid-6">
                	<img src="assets/images/inova_footer.png" id="logo_inova" />
                </div>
                
                <div class="ingrid-6 align-right">
                	<a href="https://www.facebook.com/instylermx" target="_blank" id="facebook_icon"><img src="assets/images/facebook_icon.png" alt="Facebook"  /></a>
        			<a href="https://www.youtube.com/watch?v=fjhuKp_yewU" target="_blank" id="youtube_icon"><img src="assets/images/youtube_icon.png" alt="Youtube"  /></a>
                </div>
                
                <div id="gototop_wrapper" class="ingrid-12 align-center">
                	<a id="gototop" href="#"><img src="assets/images/gototop.png"  /></a>
                </div>
            </footer>
        </div>
    </section>
</div>

</body>
</html>
