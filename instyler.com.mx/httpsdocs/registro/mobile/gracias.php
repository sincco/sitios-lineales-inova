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

<link href="assets/css/form.css" rel="stylesheet"  />

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
        <a id="phone" href="tel:018004668209" class="ingrid-12" ><img src="assets/images/phone_banner.jpg" alt="Llama ahora" /></a>
        
        <div class="ingrid-12 align-center">
        	<img src="assets/images/logo.png" alt="Instyler" id="main_logo" />
        </div>
        
        <div id="form_wrapper" class="ingrid-12 align-center">
        	<img src="assets/images/form_circle.png" id="form_circle" />
            
            <span id="p_4">¡GRACIAS!</span>
            <span id="p_5">Un especialista se pondrá en contacto a la brevedad</span>
        </div>
        
        <footer id="footer" class="ingrid-12">
          	<div class="ingrid-6">
				<img src="assets/images/inova_footer.png" id="logo_inova" />
			</div>
                
			<div class="ingrid-6 align-right">
				<a href="https://www.facebook.com/instylermx" target="_blank" id="facebook_icon"><img src="assets/images/facebook_icon.png" alt="Facebook"  /></a>
				<a href="https://www.youtube.com/watch?v=fjhuKp_yewU" target="_blank" id="youtube_icon"><img src="assets/images/youtube_icon.png" alt="Youtube"  /></a>
			</div>
		</footer>
    </section>
</div>

</body>
</html>
