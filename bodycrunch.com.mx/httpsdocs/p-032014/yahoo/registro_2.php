<?php

require_once('../general/functions.php');

$site_id = 'yahoo_bc';
$page_type = 'registro_2';
$site_template = '1';

$fields = $_POST;
$name = $_POST['nombre'];
$email = $_POST['email'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<?php if(function_exists('print_css')) print_css($site_id, $page_type) ?>

<title>Continúa Tu Registro</title>

<?php if(function_exists('print_scripts_index_header')) print_scripts_index_header($site_id, $page_type) ?>

<?php if(function_exists('print_analytics')) print_analytics($site_id) ?>


</head>

<body>
<!-- Advertiser 'MAS OFERTAS WEB SA de CV',  Conversion tracking 'INNOVA/conversion/May14' - DO NOT MODIFY THIS PIXEL IN ANY WAY -->
<img src="http://ads.yahoo.com/pixel?id=2502788&t=2" width="1" height="1" />
<!-- End of conversion tag -->
<div class="page_main_wrapper <?php echo $site_id.' '.$page_type  ?>"><div class="px1000">

<<div class="main_section">

	<div class="banner_section">
    	<div class="main_logo" style="text-align:center">
        	<img style="float:none;width:100%;max-width:500px;margin:20px auto;" src="<?php echo $bc_gv['images_uri'] ?>/main_logo.png" />
        </div>
        
        <div class="main_banner">
        	<img src="<?php echo $bc_gv['images_uri'] ?>/main_banner.png" />
        </div>
    </div>
    
    <div class="form_section" id="main" style="margin-top:170px">
        <div class="inputs_style_2">
                <?php if(isset($name)&&isset($email)):
                    echo '<div class="form_title_2">';
                    echo '<span>'.$name.'</span>, continúa tu registro';
                    echo '</div>';
                    
                    print_incomplete_form($site_id, $page_type, $site_template, '40984656365871', $name, $email);
                else:
                    echo 'Hay Datos Faltantes en <a style="color:#000" href="registro.php">la primer parte</a> de este registro';	
                endif; ?>
    	 </div>
    </div>

</div>

<div class="footer">

    <div class="footer_text"><?php if(function_exists('print_footer_text')) print_footer_text($site_id, $page_type) ?></div>
    
    <?php if(function_exists('print_social_icons')) print_social_icons($site_id, $page_type) ?>

</div>

</div></div></body>

<?php if(function_exists('print_scripts_intex_footer')) print_scripts_intex_footer($site_id, $page_type) ?>

</html>
