<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    
    $dir = getcwd();
    list($b_cgibin,$a_cgibin) = strpos( $dir, 'httpsdocs' ) !== false ? explode('httpsdocs',$dir) : explode('cgi-bin',$dir);
    $cfg_folder = $b_cgibin;
    require_once $cfg_folder."cgi-bin/vars.".php_uname('n').".php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Hurrycane México</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic" rel="stylesheet" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="mt/magicthumb.css" />
        <link rel="stylesheet" href="css/child-theme.css" />
        <link rel="stylesheet" href="http://www.inova.com.mx/sitios-oficiales/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
        
        <!-- START GOOGLE ANALYTICS  -->
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-17539527-37', 'bastonhurrycane.com');
		  ga('require', 'displayfeatures');
          ga('send', 'pageview');
        </script>
        <!-- END GOOGLE ANALYTICS  -->
        
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
        
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WP863K"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WP863K');</script>
        <!-- End Google Tag Manager -->
        <noscript>

			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />

		</noscript>

		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->

	</head>
	<body class="homepage" style="background:#FFF">
    
		<!-- Header Wrapper -->
		<div id="header-wrapper"  style="padding-top:0;">
        
        	<div class="header_background" style="float:left;width:100%;background:#2e54a0">
                <div class="container" style="padding:0;">
                    <div class="row">
                        <div class="12u">
                            <!-- Header -->
                            <section id="header">
                                <!-- Logo -->
                                <div class="12u"><div style="width:100%;max-width:1000px;margin:0 auto;">
                                    <div style="float:left;width:50%">
                                        <a href="index.html"><img src="images/main_logo_blanco.png" style="width:100%;max-width:400px"></a>
                                    </div>
                                    <div style="float:right;text-aign:right;width:50%;">
                                    	<img src="images/inova_seal.png" alt="Inova Seal" style="float:right;margin-top:20px;width:110px;">
                                        <img src="images/inova_tel.png" style="float:right;margin-top:10px" />
                                    </div>
                                </div></div>
                                <!-- Nav -->
                                
                            </section>
    
                        </div>
					</div>
				</div>
			</div>
            
            <nav class="main_menu" style="position:relative">
				<ul>
					<li class="hide_mobile"><a class="scroll" href="#quees">¿Qué es Hurrycane?</a></li>
					<li class="hide_mobile"><a class="scroll" href="#video">Video</a></li>
					<li class="hide_mobile"><a class="scroll" href="#testimoniales">Testimoniales</a></li>
					<li class="s_mobile"><a class="scroll" href="#paquetes">Paquetes</a></li>
				</ul>
			</nav>
            
			<div class="container">
				<div class="row">
					<div class="12u" style="padding-top:0;">
					<!-- Banner -->
						<section id="banner" style="margin-top:10px">
							<span class="image image-full">
                            	
                                <form action="<?=$site_checkout?>" method="post">
                                    <input type="hidden" name="vars[551557]" value="1" />
                                    <input type="image" src="images/main_banner.jpg" style="max-width:100%;"/>
                                </form>
                            
                            </span>
							
						</section>

					</div>
            	</div>
				
                <div style="float:left;width:100%;margin-top:100px">		
						<!-- Intro -->

								<div style="float:left;width:32.33%;margin:0 1%;margin-left:2%">
											<span><img src="images/a.png" style="width:100%" /></span>
											<header>
												<h2 style="color:#1b99bf">Se flexiona como un tobillo</h2>
											</header>
											<p>No importa el terreno.Cemento, tierra, nieve.</p>
								</div>
								
								<div style="float:left;width:32.33%;padding:0 1%;">
											<span><img src="images/b.png" style="width:100%" /></span>
											<header>
											<h2 style="color:#1b99bf">Se dobla como una rodilla</h2>
											</header>
											<p>Sentiras a Hurrycane como una extensión de tu cuerpo.</p>
								</div>
							
								<div style="float:left;width:32.33%;padding:0 1%;">
											<span><img src="images/c.png" style="width:100%" /></span>
											<header>
												<h2 style="color:#1b99bf">3 puntos de soporte</h2>
											</header>
											<p>Soporte al contacto con el piso para una mayo estabilidad.</p>
								</div>

							<div style="float:left;width:100%;text-align:center">
                            	<form action="<?=$site_checkout?>" method="post">
                                    <input type="hidden" name="vars[551557]" value="1" />
                                    <input type="submit" class="button big alt" value="Comprar" style="padding:20px 70px;" />
                                </form>
							</div>
				</div>
			</div>
		</div>
        
		<!-- FONDO GRIS -->
		<div id="main-wrapper">
			<div class="container">
            
				<div class="row" id="quees">
					<div class="12u">

						<header class="major">
							<h2>¿Qué ofrece HurryCane?</h2>
						</header>
							
						<div class="row">
							<div class="2u">&nbsp;</div>
							<div class="8u">
								<section class="box" style="float:left">
									<a href="#paquetes" class="scroll image image-full"><img src="images/desc.jpg" alt="" /></a>
                                                        
									<div id="diagram" style="float:left;width:30%;">
										 <img src="https://www.hurrycane.com/Content/Images/cane-zoom-thumb-usa.jpg" alt="HurryCane Freedom Edition"/>
									</div>
                                                        
									<div style="float:left;width:69%;">
										<header>
											<h3>¿Necesitas un soporte adicional al caminar?</h3>
											<span class="byline">Sabemos que un gran porcentaje de la población mexicana requiere de un apoyo extra al caminar, también sabemos que existe la necesidad de un producto que ofrezca seguridad que acompañe en cada paso, ya sea para una persona de edad avanzada o un joven con capacidades diferentes o para acompañarte en una recuperación, este producto es lo que buscas.</span>
										</header>
                                                        
                                         <p>Hurrycane es un novedoso bastón creado para cubrir esta necesidad encontrada. Este bastón es ideal para toda la población mexicana que requiere un bastón resistente, novedoso y que ofrezca la seguridad suficiente para caminar sin el miedo a perder el equilibrio.</p>
    
										<p>Hurrycane es todo terreno. Su diseño novedoso siempre te mantendrá de pie, es portátil, ligero y fácil de guardar, ya que con un sencillo movimiento puedes plegarlo y guardarlo rápidamente en su bolso.</p>
    
										<p>La gran ventaja de Hurrycane sobre otros bastones en el mercado, es que éste puedes transportarlo cómodamente a cualquier lugar, ya que no ocupa grandes espacios, además está desarrollado de resistente aluminio y el mango o manija de plástico se adapta perfectamente a la forma de tu mano.</p>
										
                                        <form action="<?=$site_checkout?>" method="post">
                                            <input type="hidden" name="vars[551557]" value="1" />
                                            <input type="submit" class="button alt big fa fa-cart" value="Comprar" />
                                        </form>
                                        
									</div>
    
									
								</section>
							</div>
							<div class="2u">&nbsp;</div>
						</div>
						
					</div>
				</div>

				<div class="container" id="paquetes">
					<div class="row" style="float:left;padding:50px 0;">
						<div class="12u" >

							<header class="major">
								<h2>Paquetes</h2>
							</header>
								
							<div class="row">
										<div class="3u">
                                        	
                                            <div class="product_item">
                                                <div class="product_image"><img src="images/productos/big/348436.jpg" alt="Hurrycane" /></div>
                                                
                                                <div class="product_text_section">
                                                    <div class="product_title normal_text_color">Hurrycane</div>
                                                            
                                                    <div class="product_price">
                                                        
                                                        <div class="normal_payment minor_text_color" style="font-size:18px">Precio Regular <span style="text-decoration:line-through">$999</span></div>
                                                        <div class="msi_message normal_text_color">6 Meses Sin Intereses de: <span class="big_price p_color_1">$132.50</span></div>
                                                        <div class="normal_payment minor_text_color">O un solo pago de <span class="small_price p_color_1">$795</span></div>
                                                        <div class="free_shipping normal_text_color">Envío GRATIS</div>
                                                        
                                                    </div>
                                                                
                                                    <div class="product_buy_button">
                                                        <form action="<?=$site_checkout?>" method="post">
                                                            <input type="hidden" name="vars[348436]" value="1" />
                                                            <input type="submit" class="p_button" value="Comprar" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
										</div>

										<div class="3u">
                                        	
                                            <div class="product_item">
                                                <div class="product_image"><img src="images/productos/big/521335.jpg" alt="Hurrycane" /></div>
                                                
                                                <div class="product_text_section">
                                                    <div class="product_title normal_text_color">Hurrycane <span class="p_plus">+ Masajeador</span></div>
                                                            
                                                    <div class="product_price">
                                                        
                                                        <div class="msi_message normal_text_color">6 Meses Sin Intereses de: <span class="big_price p_color_1">$189.83</span></div>
                                                        <div class="normal_payment minor_text_color">O un solo pago de <span class="small_price p_color_1">$1,019</span></div>
                                                        <div class="free_shipping normal_text_color">Envío GRATIS</div>
                                                        
                                                    </div>
                                                                
                                                    <div class="product_buy_button">
                                                        <form action="<?=$site_checkout?>" method="post">
                                                            <input type="hidden" name="vars[521335]" value="1" />
                                                            <input type="submit" class="p_button" value="Comprar" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
										</div>
										
										<div class="3u">
                                        
                                        	<div class="product_item">
                                                <div class="product_image"><img src="images/productos/big/775116.jpg" alt="Hurrycane" /></div>
                                                
                                                <div class="product_text_section">
                                                    <div class="product_title normal_text_color">Hurrycane <span class="p_plus">+ Antifaz Relajante</span></div>
                                                            
                                                    <div class="product_price">
                                                        
                                                        <div class="msi_message normal_text_color">6 Meses Sin Intereses de: <span class="big_price p_color_1">$183.17</span></div>
                                                        <div class="normal_payment minor_text_color">O un solo pago de <span class="small_price p_color_1">$1,099</span></div>
                                                        <div class="free_shipping normal_text_color">Envío GRATIS</div>
                                                        
                                                    </div>
                                                                
                                                    <div class="product_buy_button">
                                                        <form action="<?=$site_checkout?>" method="post">
                                                            <input type="hidden" name="vars[775116]" value="1" />
                                                            <input type="submit" class="p_button" value="Comprar" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
										</div>
                                        
                                        <div class="3u">
                                        	
                                            <div class="product_item">
                                                <div class="product_image"><img src="images/productos/big/551557.jpg" alt="Hurrycane" /></div>
                                                
                                                <div class="product_text_section">
                                                    <div class="product_title normal_text_color">2 Hurrycane</div>
                                                            
                                                    <div class="product_price">
                                                        
                                                        <div class="normal_payment minor_text_color" style="font-size:18px">Precio Regular <span style="text-decoration:line-through">$1,998</span></div>
                                                        <div class="msi_message normal_text_color">6 Meses Sin Intereses de: <span class="big_price p_color_1">$249.83</span></div>
                                                        <div class="normal_payment minor_text_color">O un solo pago de <span class="small_price p_color_1">$1,499</span></div>
                                                        <div class="free_shipping normal_text_color">Envío GRATIS</div>
                                                        
                                                    </div>
                                                                
                                                    <div class="product_buy_button">
                                                        <form action="<?=$site_checkout?>" method="post">
                                                            <input type="hidden" name="vars[551557]" value="1" />
                                                            <input type="submit" class="p_button" value="Comprar" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
										</div>
							</div>
                                
						</div>
					</div>
                </div>

				<div class="row" id="video">
					<div class="12u">
						<header class="major">
							<h2>Video</h2>
						</header>

						<div class="row">
							<div class="2u">&nbsp;</div>
							<div class="8u"><div class="video_frame">
								<iframe width="100%" height="450px" src="https://youtube.com/embed/-C_96m-YIt4?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0" frameborder="0"></iframe>
                                <img src="images/video_hover.png" class="video_hover" />
                                </div>
							</div>
							<div class="2u">&nbsp;</div>
						</div>
					</div>
				</div>
                
			</div>
		</div>
        
        <!-- FONDO BLANCO -->
		<div class="container" style="float:left;width:100%;background:#FFF">
        
			<div class="row" id="testimoniales" style="margin:0 auto;width:100%;max-width:1100px;padding:60px 0" >
				<div class="12u">
                
					<header class="major">
						<h2>Testimoniales</h2>
					</header>
                    
					<div class="row" style="text-align:center">
                    
						<div class="4u">
							<img src="images/foto1.png" style="width:100%;max-width:205px" />
							<h2 style="color:#1b99bf;margin-bottom:25px">Guadalupe Olvera</h2>
							<p>Hurrycane fue el mejor regalo de cumpleaños que pude tener.  A cada paso que doy me siento más cómoda y segura, ahora lo llevo a todos lados, ¡es muy práctico porque puedo guardarlo hasta en mi bolsa!</p>
						</div>

						<div class="4u">
							<img src="images/foto2.png" style="width:100%;max-width:205px" /></span>
							<h2 style="color:#1b99bf;margin-bottom:25px">Martha Fierro</h2>
							<p>Hace ya algunos años que perdí la fuerza en mi pierna izquierda, hoy Hurrycane es mi fuente de apoyo, no encontré mejor bastón en el mercado, es casi como volver a tener la fuerza y estabilidad de mi pierna. ¡Me encanta!</p>
						</div>

						<div class="4u">
							<img src="images/foto3.png" style="width:100%;max-width:205px" /></span>
							<h2 style="color:#1b99bf;margin-bottom:25px">Sr. Raúl Sotelo</h2>
							<p>Me encanta la estabilidad de este bastón, ¡es como si regresará la fuerza a mi rodilla!, Sin duda con Hurrycane me siento más seguro para salir a la calle, caminar y continuar con mi vida. ¡Gracias!</p>
						</div>

					</div>
                    
				</div>
			</div>
            
		</div>
		
        <style>.garant_1{float:left;width:100%;padding:50px 0}.garnt_img{float:left;width:30%;text-align:center}.garant_text{float:left;width:70%}</style>
        <div class="garant_1"><div class="px1000" style="width:98%;margin:0 auto;max-width:1000px">
            
            <div class="garnt_img">
                <img src="http://eagleeyes.com.mx/images/sello_garant.png" />
            </div>
            <div class="garant_text">
                <h1>Garantía de Satisfacción Total</h1>
                <p>Inova cuenta con mas de 20 años en el mercado ofreciendo la mejor calidad en los artículos del mercado de venta directa por TV. Adquiriendo nuestros productos hace una excelente inversión en usted y su familia.</p>
        
                <p>Pensando en usted, Inova también le brinda de manera gratuita, la Garantía de Satisfacción Total. Si por alguna razón usted no se encuentra satisfecho con su adquisición, de una manera fácil y sencilla puede realizar un cambio del producto o la devolución de su dinero.</p>
            </div>
        </div></div>
        
		<!-- Footer Wrapper -->
		<div class="footer">
			<div class="logo_inova_footer"><img src="images/logo_inova_footer.png"></div>
			<p>&copy;  Más Ofertas Web S. A. de C. V.</p>
            <p style="float:left;width:100%;"><a href="http://www.inova.com.mx/sitios-oficiales/index.html?iframe=true&width=100%&height=100%" class="lightbox" style="font-size:14px;color:#FFF;text-decoration:none" ><span style="margin:0 10px">Formas de Pago </span>-<span style="margin:0 10px">Tiempos de Entrega</span>-<span style="margin:0 10px">Preguntas Frecuentes</span></a></p>
		</div>
            


<script src="http://www.inova.com.mx/sitios-oficiales/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script>
jQuery(document).ready(function() {
		
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
	});
	
	 $('a.lightbox').prettyPhoto({social_tools:false});
	
});
</script>

<script type="text/javascript">
var google_tag_params = {
ecomm_prodid: '348436',
ecomm_pagetype: 'home',
ecomm_totalvalue: '849.15',
};
</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1068963570;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1068963570/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

	</body>
</html>