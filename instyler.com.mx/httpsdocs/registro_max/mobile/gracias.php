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
?> -->

<div class="page_wrapper">
	<img src="assets/images/header.png" class="header" alt="Llama Sin Costo al 01800 466 8209">
    <div class="logo">
    	<img src="assets/images/logo.png" alt="InStyler">
    </div>
    
    <div class="form_wrapper tnks">
    	<div class="form">
            
        </div>
    </div>    
    <img src="assets/images/footer.png" class="footer">
</div>


</body>
</html>
