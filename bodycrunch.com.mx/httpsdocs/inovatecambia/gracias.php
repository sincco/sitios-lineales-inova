<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Inova te Cambia | Registro</title>

<link href="assets/css/framework.css" rel="stylesheet" />
<link href="assets/css/main.css" rel="stylesheet" />
</head>

<body class="tnk_body">

<div id="page_wrapper" class="ingrid-12">
	<div id="header" class="ingrid-12"></div>
    
    <div class="px1000">
        <div id="main_content" class="ingrid-12">
            <div class="ingrid-5 align-center">
                <div class="ingrid-12">
                    <img src="assets/images/casa_sidebar_01.png" alt="En Inova te vamos a cambiar" />
                </div>
                <div class="ingrid-12">
                    <img src="assets/images/casa_sidebar_02.png" alt="Pero de Casa" />
                </div>
                <div class="ingrid-12">
                    <a href="#">
                        <img src="assets/images/casa_sidebar_03.png" alt="Body Crunch Evol" />
                    </a>
                </div>
                <div class="ingrid-12">
                    <a href="#">
                        <img src="assets/images/casa_sidebar_04.png" alt="Bosy Crunch Clásico" />
                    </a>
                </div>
                <div class="ingrid-12">
                    <a href="#">
                        <img src="assets/images/casa_sidebar_05.png" alt="DermaWand" />
                    </a>
                </div>
                <div class="ingrid-12">
                    <a href="#">
                        <img src="assets/images/casa_sidebar_06.png" alt="Sognare" />
                    </a>
                </div>
            </div>
            
            <div id="tnk_main" class="ingrid-7 align-center">
            	<div class="ingrid-12 align-center">
                	<img src="assets/images/tnk_ribbon.png" alt="Gracias por tu Registro" id="tnk_ribbon" />
                </div>
                
                <div id="tnk_main_section">
                	<h1 class="user_name"><?php echo $_POST['nombrecompleto'] ?></h1>
                    <span class="tnk_subtitle ingrid-12">este es tu código de registro</span>
                    <span class="tnk_code ingrid-12"><?php echo $_POST['codigo'] ?></span>
                </div>
                
                <div class="ingrid-12 align-center">
                	<img src="assets/images/tnk_casa.png" alt="Gracias por tu Registro" id="tnk_casa" />
                </div>
                
                <div class="ingrid-12 align-center">
                	<a href="http://inova.com.mx/inovatecambia/" class="button" id="reg_otra">Registrar otra compra</a>
                </div>
            </div>
		</div>
	</div><!-- MAIN PX 1000 -->
    
    <div id="footer" class="ingrid-12 align-center">
		<ul id="footer_menu" class="ingrid-12">
             <li><a href="terminos.html?iframe=true&width=100%&height=100%" class="lightbox">Mecánica</a></li>
             <li><a href="terminos.html?iframe=true&width=100%&height=100%" class="lightbox">Términos y Condiciones</a></li>
             <li><a href="terminos.html?iframe=true&width=100%&height=100%" class="lightbox">Preguntas Frecuentes</a></li>
         </ul>
         
         <p>
             Inova®. Todos los derechos reservados.<br />
             Las imagenes utilizadas son meramente ilustrativas.<br />
             Aviso PROFECO PFC.C.A.3-002910/15<br />
         </p>
	</div>
</div>

<script src="http://jotform.co/js/vendor/jquery-1.8.0.min.js" type="text/javascript"></script>

<script>jQuery.noConflict();</script>

<!-- PRETTYPHOTO -->
<link rel="stylesheet" href="http://www.inova.com.mx/sitios-oficiales/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="http://www.inova.com.mx/sitios-oficiales/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script>
jQuery(document).ready(function($){
	$('a.lightbox').prettyPhoto({social_tools:false});
});
</script>
</body>
</html>
