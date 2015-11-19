<?php

require_once('../general/functions.php');

$site_id = 'yahoo_h';
$page_type = 'registro';
$site_template = '1';

$fields = $_POST;
$name = $_POST['nombre'];
$email = $_POST['email'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" href="../general/css/general.css" />
<link rel="stylesheet" type="text/css" href="../general/css/template_2.css" />
<link rel="stylesheet" type="text/css" href="../general/css/template_2_colors.css" />

<title>Hurrycane | Registro</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17539527-37', 'bastonhurrycane.com');
  ga('send', 'pageview');

</script>
</head>

<body>
<!-- Advertiser 'MAS OFERTAS WEB SA de CV',  Conversion tracking 'INNOVA/conversion/May14' - DO NOT MODIFY THIS PIXEL IN ANY WAY -->
<img src="http://ads.yahoo.com/pixel?id=2502788&t=2" width="1" height="1" />
<!-- End of conversion tag -->
<div class="logo_section">
	<div class="main_logo">
		<img src="../general/images/main_logo.png" />
	</div>
</div>
<div class="page_main_wrapper"><div class="px1000">

<div class="main_section">
    
    <div class="form_section">
    
    	<div class="main_banner">
        	<?php if(!isset($name)&&!isset($email)){$num = '3';}else{$num = '2';} ?>
        	<img src="../general/images/main_banner_<?php echo $num ?>.jpg" />
        </div>
        
        <div class="register_form inputs_style_2">
        	
            <?php if(isset($name)&&isset($email)):
                    echo '<div class="form_title" style="margin-bottom:30px">';
                    echo '<span style="font-size:32px">'.$name.'</span>, continúa tu registro';
                    echo '</div>';
                    
                    print_incomplete_form($site_id, $page_type, $site_template, '40995034885870', $name, $email);
                else:
                    echo '<div class="form_title" style="margin:30px 0">Hay Datos Faltantes en <a style="color:#fd3434" href="registro.php">la primer parte</a> de este registro</div>';	
                endif; ?>
        
        </div>
    </div>

</div>

<div class="px1000"><div class="decription_section">
<h1 class="description_title">Hurrycane</h1>

<div class="descrption_text"><div class="col_set">

<div class="col_1_2 first">
<p>¿Necesitas un soporte adicional al caminar?
Sabemos que un gran porcentaje de la población mexicana requiere de un apoyo extra al caminar, también sabemos que existe la necesidad de un producto que ofrezca seguridad que acompañe en cada paso, ya sea para una persona de edad avanzada o un joven con capacidades diferentes o para acompañarte en una recuperación, este producto es lo que buscas.</p>

<p>Hurrycane es un novedoso bastón creado para cubrir esta necesidad encontrada. Este bastón es ideal para toda la población mexicana que requiere un bastón resistente, novedoso y que ofrezca la seguridad suficiente para caminar sin el miedo a perder el equilibrio.</p>
</div>

<div class="col_1_2">
<p>Hurrycane es todo terreno. Su diseño novedoso siempre te mantendrá de pie, es portátil, ligero y fácil de guardar, ya que con un sencillo movimiento puedes plegarlo y guardarlo rápidamente en su bolso.</p>

<p>La gran ventaja de Hurrycane sobre otros bastones en el mercado, es que éste puedes transportarlo cómodamente a cualquier lugar, ya que no ocupa grandes espacios, además está desarrollado de resistente aluminio y el mango o manija de plástico se adapta perfectamente a la forma de tu mano.</p>
</div>

</div></div>

</div></div>


<div class="footer">

	<div class="footer_text">Mas Ofertas Web S. A. de C. V. © 2014 | bastonhurrycane.com</div>

</div>

</div></div></body>
</html>
