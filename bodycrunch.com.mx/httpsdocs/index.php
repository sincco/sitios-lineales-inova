<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    
    $dir = getcwd();
    list($b_cgibin,$a_cgibin) = strpos( $dir, 'httpsdocs' ) !== false ? explode('httpsdocs',$dir) : explode('cgi-bin',$dir);
    $cfg_folder = $b_cgibin;
    require_once $cfg_folder."cgi-bin/vars.".php_uname('n').".php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Body Crunch | Sitio Oficial</title>

<link href="assets/css/framework.css" rel="stylesheet"  />
<link href="assets/css/main.css" rel="stylesheet"  />

<!--SLIDER BASES -->
<link href="assets/css/masterslider/masterslider.css" rel="stylesheet" />
<link href="assets/css/masterslider/skins/default/style.css" rel='stylesheet' type='text/css'>

<!-- PRETTYPHOTO -->
<link rel="stylesheet" href="http://www.inova.com.mx/sitios-oficiales/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />

<!-- RETO BC SLIDER -->
<link href="assets/css/ms-caro3d.css" rel="stylesheet" >
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script>
	if(window.innerWidth <= 800) {
		window.location.replace('http://bodycrunch.com.mx/mobile/');
	}
</script>

<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=48818,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->

<!-- START GOOGLE ANALYTICS  -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17539527-40', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>
<!-- END GOOGLE ANALYTICS  -->

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TL3S5F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TL3S5F');</script>
<!-- End Google Tag Manager -->

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){
z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?21C2UQwR3bsgtB8WP0Lh9n92CymfpwBB';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->

<!-- SessionCam Client Integration v6.0 -->
<script type="text/javascript">
//<![CDATA[
var scRec=document.createElement('SCRIPT');
scRec.type='text/javascript';
scRec.src="//d2oh4tlt9mrke9.cloudfront.net/Record/js/sessioncam.recorder.js";
document.getElementsByTagName('head')[0].appendChild(scRec);
//]]>
</script>
<!-- End SessionCam -->

</head>

<body>

<div id="main_wrapper">
	<div id="header_keepper" class="ingrid-12"></div>
    <header id="header" class="ingrid-12 align-left">
    	<div class="px1000">
            <div id="main_logo" class="ingrid-4">
                <img src="assets/images/logo_evol.png" alt="Body Crunch Evol" />
            </div>
            
            <div class="ingrid-8">                
                <div id="header_tel" class="ingird-6 align-right float-right">
                    <a href="tel:5546242998">
                        <img src="assets/images/inova_tel.png" width="150px" alt="Llama ahora al 5546242998" />
                    </a>
                </div>
                
                <div id="buy_button_header" class="ingrid-6 align-right float-right">
                    <form action="<?=$site_checkout?>" method="post">
                        <input type="hidden" name="vars[427729]" value="1" />
                        <input type="image" src="assets/images/buy_button_green_small.jpg" style="width:200px" />
                    </form>
                </div>
            </div>
		</div>
	</header>
    
    <div id="slider" class="ingrid-12">
    	<!-- masterslider -->
        <div class="master-slider ms-skin-default" id="main_slider">

            <div class="ms-slide slide-1" data-delay="10">
                <img src="assets/css/masterslider/blank.gif" data-src="assets/images/slider_1_bg.jpg" alt="Slide1 background">
                
                <div class="ms-layer" data-effect="right(short)" data-duration="1000" data-delay="0" data-ease="easeOutExpo" style="left:110px;top:0;">
                	<form action="<?=$site_checkout?>" method="post">
                        <input type="hidden" name="vars[427729]" value="1" />
                        <input type="image" src="assets/images/slider_1_layer_1.png" id="slider_1_img" style="max-width:100%" />
                    </form>
                </div>        
            </div>
            <!-- SLIDE 1 BC EVOL -->

            <div class="ms-slide slide-2" data-delay="10">
                <img src="assets/css/masterslider/blank.gif" data-src="assets/images/slider_2_bg.jpg" alt="Slide1 background">
                
                <div class="ms-layer" data-effect="right(short)" data-duration="1000" data-delay="0" data-ease="easeOutExpo" style="left:110px;top:0;">
                	<form action="<?=$site_checkout?>" method="post">
                        <input type="hidden" name="vars[427729]" value="1" />
                        <input type="image" src="assets/images/slider_2_layer_1.png" id="slider_2_img" style="max-width:100%" />
                    </form>
                </div>
            </div>
            <!-- SLIDE 2 CRISTINA -->
            
            <div class="ms-slide slide-3" data-delay="10">
                <img src="assets/css/masterslider/blank.gif" data-src="assets/images/slider_3_bg.jpg" alt="Slide1 background">
                
                <div class="ms-layer" data-effect="right(short)" data-duration="1000" data-delay="0" data-ease="easeOutExpo" style="left:110px;top:0;">
                	<form action="<?=$site_checkout?>" method="post">
                        <input type="hidden" name="vars[427729]" value="1" />
                        <input type="image" src="assets/images/slider_3_layer_1.png" id="slider_2_img" style="max-width:100%" />
                    </form>
                </div>    
            </div>
            <!-- SLIDE 3 BC EVOL 2 -->
            
            <div class="ms-slide slide-4" data-delay="10">
                <img src="assets/css/masterslider/blank.gif" data-src="assets/images/slider_4_bg.jpg" alt="Slide1 background">    
				
                <div class="ms-layer" data-effect="right(short)" data-duration="1000" data-delay="0" data-ease="easeOutExpo" style="left:110px;top:0;">
                	<form action="<?=$site_checkout?>" method="post">
                        <input type="hidden" name="vars[368775]" value="1" />
                        <input type="image" src="assets/images/slider_4_layer_1.png" id="slider_2_img" style="max-width:100%" />
                    </form>
                </div> 
            </div>
            <!-- SLIDE 2 BC CLASICO -->
            
            
        </div>
        <!-- end of masterslider -->
    </div>
    
    <div id="beneficios" class="ingrid-12 black_section">
    	<div class="px1000">
                <div id="beneficios_bg" class="ingrid-12">
                <div class="ingrid-6 align-center">
                    <h1 id="beneficios_title" class="text_color_1 align-center section_title">BENEFICIOS</h1>
                </div>
                
                <div id="beneficios_1" class="ingrid-7">
                    <img src="assets/images/beneficios_1.png" alt="Reactiva tu sistema vascular"/>
                </div>
                
                <div class="ingrid-5">
                    <div id="beneficios_2" class="ingrid-12">
                        <img src="assets/images/beneficios_2.png" alt="Rutinas" />
                    </div>
                    
                    <div id="beneficios_text" class="ingrid-12 align-center section_text">
                        <p>Complementa tu rutina de ejercicio con una exclusiva guía nutricional, que contiene consejos y deliciosos platillos, diseñados para darte el balance perfecto. Todo, creado para que logres los mejores resultados y quemes grasa de forma rápida y saludable.</p>
                    </div>
                    
                    <div id="beneficios_3" class="ingrid-12">
                    	<form action="<?=$site_checkout?>" method="post">
                            <input type="hidden" name="vars[427729]" value="1" />
                            <input type="image" src="assets/images/beneficios_3.png" />
                        </form>
                    </div>
                </div>
			</div>
        </div>
    </div><!-- END OF BENEFICIOS -->
    
    <div id="caracteristicas" class="ingrid-12 white_section">
    	<div class="px1000">
        	<div class="ingrid-6 float-right">
            	<h1 id="caracteristicas_title" class="text_color_2 align-center section_title">CARACTERÍSTICAS</h1>
                <div id="caracteristicas_text" class="ingrid-12 align-center section_text">
                	<p>El aparato de ejercicio más vendido de México se renueva, incorporando una práctica bicicleta estática al diseño clásico del Body Crunch. Aumenta tu tono muscular gracias al pistón incorporado con 12 niveles de resistencia, ideales para fortificar los músculos de espalda, torso, piernas, brazos y abdomen. Baja de peso y quema calorías en la comodidad de tu hogar.</p>
                </div>
            </div>
			
            <div id="carteristicas_main_img" class="ingrid-12">
				<img src="assets/images/caracteristicas.png" alt="Caracteríticas" />
            </div>
        </div>
    </div><!-- END OF CARACTERISTICAS -->
    
    <div id="video" class="ingrid-12 black_section">
    	<div class="px1000">
        	<h1 id="video_title" class="text_color_1 align-center section_title">VIDEO</h1>
            
            <div class="px1000" style="max-width:800px">
                <div id="videmo_main_wrapper" class="ingrid-12">
                    <img src="assets/images/video_over.png" id="video_over" />
                    <iframe src="http://www.youtube.com/embed/RbNW-J8ApVg?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="100%" height="455" frameborder="0"></iframe> 
                </div>
            </div>
            
            <div class="ingrid-12 align-center">
            	<form action="<?=$site_checkout?>" method="post">
					<input type="hidden" name="vars[427729]" value="1" />
					<input type="image" src="assets/images/buy_button_green_big.jpg" />
				</form>
            </div>
        </div>
	</div><!-- END OF VIDEO -->
    
    <div id="mejoras" class="ingrid-12 white_section">
    	<div class="px1000">
        	<h1 id="mejoras_title" class="text_color_2 align-center section_title">MEJORAS</h1>
            
            <div id="mejoras_main" class="ingrid-12">
                <div id="mejoras_bc" class="ingrid-6 align-center">
                    <img src="assets/images/mejoras_bc.png" class="mejoras_main_img" alt="Caracteríticas" />
                    
                    <div class="ingrid-12 mejoras_buy">
                        <form action="<?=$site_checkout?>" method="post">
                            <input type="hidden" name="vars[368775]" value="1" />
                            <input type="image" src="assets/images/buy_button_orange_small.jpg" />
                        </form>
                    </div>
                </div>
                
                <div id="mejoras_bc_evol" class="ingrid-6 align-center">
                    <img src="assets/images/mejoras_bc_evol.png" class="mejoras_main_img" alt="Caracteríticas" />
                    
                    <div class="ingrid-12 mejoras_buy">
                        <form action="<?=$site_checkout?>" method="post">
                            <input type="hidden" name="vars[427729]" value="1" />
                            <input type="image" src="assets/images/buy_button_green_small.jpg" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END OF MEJORAS -->
    
    <div id="comprar" class="ingrid-12 black_section">
    	<div class="px1000">
        
            <div id="comprar_bcs" class="ingrid-4">
                <div class="product_buy">
                    <div class="product_thumbnail ingrid-12 align-center">
                        <img src="assets/images/bc_s.png" alt="KIT BODY CRUNCH S" />
                    </div>
                    
                    <div class="ingrid-12 product_data align-center">
                        <h1 class="product_title">KIT BODY CRUNCH S</h1>
                        
                        <span class="msi ingrid-12">6 MESES SIN INTERESES DE</span>
                        <span class="msi_price ingrid-12 text_color_1">$133.16</span>
                        <span class="ouspd ingrid-12 light_text">o un solo pago de</span>
                        <span class="ouspd_price ingrid-12">$799</span>
                        <span class="envio ingrid-12 light_text">ENVÍO GRATIS</span>
                    </div>
                    
                    <div class="product_buy_button ingrid-12 align-center">
                        <form action="<?=$site_checkout?>" method="post">
                            <input type="hidden" name="vars[313400]" value="1" />
                            <input type="image" src="assets/images/buy_button_green_small_2.jpg" />
                        </form>
                    </div>
                </div>
            </div>
            
            <div id="comprar_bc" class="ingrid-4">
                <div class="product_buy">
                    <div class="product_thumbnail ingrid-12 align-center">
                        <img src="assets/images/bc.png" alt="BODY CRUNCH CLÁSICO" />
                    </div>
                    
                    <div class="ingrid-12 product_data align-center">
                        <h1 class="product_title">BODY CRUNCH CLÁSICO</h1>
                        
                        <span class="msi ingrid-12">6 MESES SIN INTERESES DE</span>
                        <span class="msi_price ingrid-12 text_color_1">$666.50</span>
                        <span class="ouspd ingrid-12 light_text">o un solo pago de</span>
                        <span class="ouspd_price ingrid-12">$3,999</span>
                        <span class="envio ingrid-12 light_text">ENVÍO GRATIS</span>
                    </div>
                    
                    <div class="product_buy_button ingrid-12 align-center">
                        <form action="<?=$site_checkout?>" method="post">
                            <input type="hidden" name="vars[368775]" value="1" />
                            <input type="image" src="assets/images/buy_button_green_small_2.jpg" />
                        </form>
                    </div>
                </div>
            </div>
            
            <div id="comprar_bc_evol" class="ingrid-4">
                <div class="product_buy">
                    <div class="product_thumbnail ingrid-12 align-center">
                        <img src="assets/images/bc_evol.png" alt="BODY CRUNCH EVOL" />
                    </div>
                    
                    <div class="ingrid-12 product_data align-center">
                        <h1 class="product_title">BODY CRUNCH EVOL</h1>
                        
                        <span class="msi ingrid-12">6 MESES SIN INTERESES DE</span>
                        <span class="msi_price ingrid-12 text_color_2">$883.17</span>
                        <span class="ouspd ingrid-12 light_text">o un solo pago de</span>
                        <span class="ouspd_price ingrid-12">$5,299</span>
                        <span class="envio ingrid-12 light_text">ENVÍO GRATIS</span>
                    </div>
                    
                    <div class="product_buy_button ingrid-12 align-center">
                        <form action="<?=$site_checkout?>" method="post">
                            <input type="hidden" name="vars[427729]" value="1" />
                            <input type="image" src="assets/images/button_ribbon_orange.png" />
                        </form>
                    </div>
                </div>
            </div>
		
        </div>
    </div><!-- END OF COMPRAR -->
    
    <div id="bcs" class="ingrid-12 white_section">
    	<div class="px1000">
        	<div class="ingrid-6 align-center">
            	<h1 id="bsc_title" class="text_color_3 section_title">¿YA TIENES TU BODY CRUNCH?</h1>
                <span class="page_subtitle ingrid-12">COMPLETA TU ENTRENAMIENTO CON EL KIT BODY CRUNCH S</span>
                
                <div id="bsc_text" class="ingrid-12 section_text"><div class="padding_20">
                	<p>Para complementar los increíbles resultados del Body Crunch y mejorar la eficiencia de tu ejercicio diseñamos este Kit complementario. Ahora podrás quemar grasa y moldear tu figura mucho más rápido. Diseñado considerando los 3 aspectos más importantes a la hora de fijar una rutina de ejercicio: Entrenamiento + Descanso + Nutrición</p>
                </div></div>
            </div>
            
            <div class="ingrid-6 align-center">
            	<div class="fast_buy">
                	<div class="fb_msi ingrid-12">6 MESES SIN INTERESES DE <span class="fb_msi_price text_color_3">$133.16</span></div>
                    <div class="fb_ouspd ingrid-12"><span class="light_text">O UN SOLO PAGO DE</span><span class="fb_ouspd_price"> $799</span></div>
                    <div class="fb_buy_button ingrid-12 align-center">
                    	<form action="<?=$site_checkout?>" method="post">
                            <input type="hidden" name="vars[313400]" value="1" />
                            <input type="image" src="assets/images/buy_button_pink_small.jpg" />
                        </form>
                    </div>
                </div>
            </div>
            
            <ul id="bcs_content_list" class="ingrid-12">
            	<li><img src="assets/images/bcs_1.png" alt="FAJA DE NEOPRENO" /><span>FAJA DE NEOPRENO</span></li>
                <li><img src="assets/images/bcs_2.png" alt="SUPLEMENTO ALIMENTICIO BODY CRUNCH S" /><span>SUPLEMENTO ALIMENTICIO<br /> BODY CRUNCH S</span></li>
                <li><img src="assets/images/bcs_3.png" alt="GEL CORPORAL CON L-CARNITINA" /><span>GEL CORPORAL<br /> CON L-CARNITINA</span></li>
                <li><img src="assets/images/bcs_4.png" alt="SUPLEMENTO ALIMENTICIO BODY CRUNCH S" /><span>LIBRO TE TIPS NUTRICIONALES <br />Y LIBRO DE 7 PASOS</span></li>
            </ul>
            
        </div>
    </div><!-- END OF BSC -->
    
    <div id="garantia" class="ingrid-12 black_section" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
        <div class="px1000">
            <div class="ingrid-3 align-center">
                <img src="assets/images/garantia_seal.png" alt="Sello de Garantia" id="garantia_seal" />
            </div>
    
            <div class="ingrid-9 align-center"><div class="padding_30">
            	<h1 id="garantia_title" class="text_color_2 align-center section_title">GARANTÍA DE SATISFACCIÓN TOTAL</h1>
                <div id="garantia_text" class=" ingrid-12">
                    <p>Inova cuenta con mas de 20 años en el mercado ofreciendo la mejor calidad en los artículos del mercado de venta directa por TV. Adquiriendo nuestros productos hace una excelente inversión en usted y su familia.</p>
    
                    <p>Pensando en usted, Inova también le brinda de manera gratuita, la Garantía de Satisfacción Total. Si por alguna razón usted no se encuentra satisfecho con su adquisición, de una manera fácil y sencilla puede realizar un cambio del producto o la devolución de su dinero.</p>
                </div>
            </div></div>
        </div>
    </div><!-- END OF GARANTIA -->
    
    <div id="social" class="ingrid-12 white_section">
    	<div class="px1000">
            <h1 id="social_title" class="text_color_1 align-center section_title">REDES SOCIALES</h1>
            
            <div id="social_facebook" class="ingrid-6"><div class="padding_30">
                <div class="black_box ingrid-12 black_section"><div class="padding_20">
                    <h3 class="box_title align-center">FACEBOOK</h3>
                    <div class="box_content ingrid-12"><div class="padding_20">
                        <ul id="facebooko_comments_list" class="ingrid-12">
                            <li>
                                <div class="commment_thumb">
                                    <img src="assets/images/comments/001.jpg" alt="Pablo Lemus" />
                                </div>
                                <div class="comment_content">
                                    <span class="comment_name">Pablo Lemus</span> En mi experiencia el Body Crunch me funcionó mucho mejor que cualquier gimnasio, es muy divertido entrenar en él y los resultados los comienzas a sentir de volada. Ahora tengo cuadritos :)
                                </div>
                                <div class="comment_actions">
                                	Responder | <span class="comment_like">Me Gusta</span>
                                </div>
                            </li>
                            
                            <li>
                                <div class="commment_thumb">
                                    <img src="assets/images/comments/002.jpg" alt="Gaby Torres" />
                                </div>
                                <div class="comment_content">
                                    <span class="comment_name">Gaby Torres</span> Como chica les puedo contar que la neta las rutinas de ejercicio en el Body Crunch te hacen bajar de peso en un 2 dos 3 y terminas teniendo un cuerpazo. Si les interesa tener piernas lindas y cinturita tienen que probarlo. 
                                </div>
                                <div class="comment_actions">
                                	Responder | <span class="comment_like">Me Gusta</span>
                                </div>
                            </li>
                            
                            <li>
                                <div class="commment_thumb">
                                    <img src="assets/images/comments/003.jpg" alt="Patricia Ríos" />
                                </div>
                                <div class="comment_content">
                                    <span class="comment_name">Patricia Ríos</span> Tiene tiempo que mi doctor me recomendó ejercicio constante para reducir las riesgos cardiacos pero la verdad es que me daba no se qué salir a correr o así, entonces me compré un Body Crunch y súper padre, ahora puedo ejercitarme en mi casa a la hora que se me antoja. 
                                </div>
                                <div class="comment_actions">
                                	Responder | <span class="comment_like">Me Gusta</span>
                                </div>
                            </li>
                            
                            <li>
                                <div class="commment_thumb">
                                    <img src="assets/images/comments/004.jpg" alt="Roberto Cabrera" />
                                </div>
                                <div class="comment_content">
                                    <span class="comment_name">Roberto Cabrera</span> Conforme van pasando algunos años te comienzas a sentir con menos energía, te mueves menos y eso perjudica a todo tu cuerpo. Tengo ya casi 7 meses entrenando todos los días un ratito con este aparato y ha mejorado muchísimo varios aspectos de mi salud. Me siento con más pila y de pies a cabeza el cuerpo lo siento al cien. 
                                </div>
                                
                                <div class="comment_actions">
                                	Responder | <span class="comment_like">Me Gusta</span>
                                </div>
                            </li>
                        </ul>
                    </div></div>
                </div></div>
            </div></div>
            
            <div id="social_instagram" class="ingrid-6"><div class="padding_30">
                <div class="black_box ingrid-12 black_section"><div class="padding_20">
                    <h3 class="box_title align-center">INSTAGRAM</h3>
                    <p class="align-center">Síguenos en el día a día a través de Instagram<br />y comprate con nosotros su experiencia Body Curnch
                    <div class="padding_20">
                    
                        <ul id="instagram_list" class="ingrid-12">
                            <li><img src="assets/images/instagram/001.jpg" alt="NOMBRE DE PERSONA" /></li>
                            <li><img src="assets/images/instagram/002.jpg" alt="NOMBRE DE PERSONA" /></li>
                            <li><img src="assets/images/instagram/003.jpg" alt="NOMBRE DE PERSONA" /></li>
                            <li><img src="assets/images/instagram/004.jpg" alt="NOMBRE DE PERSONA" /></li>
                            
                            <li><img src="assets/images/instagram/005.jpg" alt="NOMBRE DE PERSONA" /></li>
                            <li><img src="assets/images/instagram/006.jpg" alt="NOMBRE DE PERSONA" /></li>
                            <li><img src="assets/images/instagram/007.jpg" alt="NOMBRE DE PERSONA" /></li>
                            <li><img src="assets/images/instagram/008.jpg" alt="NOMBRE DE PERSONA" /></li>
                        </ul>
                    </div>
                </div></div>
            </div></div>
            
		</div>
    </div><!-- END OF SOCIAL -->
    
    <div id="reto_bc" class="ingrid-12 black_section">
    	<div class="px1000">
        	<h1 id="reto_bc_title" class="text_color_2 align-center section_title">RETO BODY CRUNCH</h1>
            
            <div class="px1000" style="max-width:800px">
                <div id="reto_bc_text" class="ingrid-12 section_text align-center">
                        <p>3 trabajadores de Inova se someterán a alimentación balanceada y ejercicio con Body Crunch ¡Sigue esta aventura de salud!</p>
                </div>
            </div>
            
            <div id="reto_bc_slider" class="ingrid-12">
            	<img src="assets/images/video_over.png" id="video_over_carousel" />
                <div class="ms-caro3d-template ms-caro3d-wave">
                    <div class="master-slider ms-skin-default" id="reto_slider">
                        <div class="ms-slide">
                            <img src="assets/css/masterslider/blank.gif" alt="lorem ipsum dolor sit"/>  
                            <iframe src="http://www.youtube.com/embed/e55F5jWNAhg?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="460" height="259" frameborder="0"> </iframe>
                        </div>
                        <div class="ms-slide">
                            <img src="assets/css/masterslider/blank.gif" alt="lorem ipsum dolor sit"/>  
                            <iframe src="http://www.youtube.com/embed/gwb_cnLmeYo?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="460" height="259" frameborder="0"> </iframe> 
                        </div>
                        <div class="ms-slide">
                            <img src="assets/css/masterslider/blank.gif" alt="lorem ipsum dolor sit"/>  
                            <iframe src="http://www.youtube.com/embed/prQmiyiTUtU?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="460" height="259" frameborder="0"> </iframe>
                        </div>
                        <div class="ms-slide">
                            <img src="assets/css/masterslider/blank.gif" alt="lorem ipsum dolor sit"/>  
                            <iframe src="http://www.youtube.com/embed/hsfo-3JRVRo?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="460" height="259" frameborder="0"> </iframe>
                        </div>
                        <div class="ms-slide">
                            <img src="assets/css/masterslider/blank.gif" alt="lorem ipsum dolor sit"/>  
                            <iframe src="http://www.youtube.com/embed/mCkfW3e_FfI?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="460" height="259" frameborder="0"> </iframe>
                        </div>
                        <div class="ms-slide">
                            <img src="assets/css/masterslider/blank.gif" alt="lorem ipsum dolor sit"/>  
                            <iframe src="http://www.youtube.com/embed/LiOOoMwRfu4?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="460" height="259" frameborder="0"> </iframe>
                        </div>
                        <div class="ms-slide">
                            <img src="assets/css/masterslider/blank.gif" alt="lorem ipsum dolor sit"/>  
                            <iframe src="http://www.youtube.com/embed/n4HGcjXlExs?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="460" height="259" frameborder="0"> </iframe>
                        </div>
                        <div class="ms-slide">
                            <img src="assets/css/masterslider/blank.gif" alt="lorem ipsum dolor sit"/>  
                            <iframe src="http://www.youtube.com/embed/Cd95Byqknl0?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" width="460" height="259" frameborder="0"> </iframe>
                        </div>
                    </div>
				</div>           	
            </div>
        </div>
    </div>
    
    <div class="ingrid-12" style="margin:20px 0">
    	<div class="px1000" style="max-width:1125px">
    		<a href="https://play.google.com/store/apps/details?id=air.BodyCrunch" target="_blank" class="float-left"><img src="assets/images/app_01.png" alt="Descarga la APP Oficial" /></a>
        	<a href="https://play.google.com/store/apps/details?id=air.BodyCrunch" target="_blank" class="float-left"><img src="assets/images/app_02.png" alt="Descarga la APP Oficial" /></a>
        </div>
    </div>
    
    <div class="ingrid-12 align-center" style="margin:20px 0">
    	<a href="http://www.inova.com.mx/inovatecambia/" target="_blank">
        	<img src="assets/images/inovatecambia_banner.png" alt="Gana una Casa con tu compra" />
        </a>
    </div>
    
    <footer id="footer" class="ingrid-12">
    	<div class="px1000">
            <div id="logo_inova_footer" class="ingrid-12 align-center">
                <img src="assets/images/inova_logo_footer.png" alt="Inova" />
            </div>
            
            <nav id="footer_menu" class="ingrid-12">
                <ul class="ingrid-12">
                    <li><a href="http://www.inova.com.mx/sitios-oficiales/index.html?iframe=true&width=100%&height=100%" class="lightbox">Formas de Pago</a></li>
                    <li><a href="http://www.inova.com.mx/sitios-oficiales/index.html?iframe=true&width=100%&height=100%" class="lightbox">Tiempos de Entrega</a></li>
                    <li><a href="http://www.inova.com.mx/sitios-oficiales/index.html?iframe=true&width=100%&height=100%" class="lightbox">Preguntas Frecuentes</a></li>
                </ul>
            </nav>
		</div>
    </footer>
    
    
</div><!-- END OF MAIN WRAPPER -->

<!-- PAGE SCRIPTS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/masterslider.min.js"></script>
<script src="http://www.inova.com.mx/sitios-oficiales/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>