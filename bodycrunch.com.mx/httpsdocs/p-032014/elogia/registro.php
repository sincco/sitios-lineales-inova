<?php

require_once('../general/functions.php');

$site_id = 'elogia_bc';
$page_type = 'registro';
$site_template = '1';
$form_id = '40626329378865';
$fields_num = 5;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<?php if(function_exists('print_css')) print_css($site_id, $page_type) ?>

<title><?php if(function_exists('print_page_title')) print_page_title($site_id, $page_type) ?></title>

<?php if(function_exists('print_scripts_index_header')) print_scripts_index_header($site_id, $page_type) ?>

<?php if(function_exists('print_analytics')) print_analytics($site_id) ?>


</head>

<body><div class="page_main_wrapper <?php echo $site_id.' '.$page_type  ?>"><div class="px1000">

<div class="main_section">

	<div class="banner_section">
    	<div class="main_logo">
        	<img src="<?php echo $bc_gv['images_uri'] ?>/main_logo.png" />
        </div>
        
        <div class="main_banner">
        	<img src="<?php echo $bc_gv['images_uri'] ?>/main_banner.png" />
        </div>
    </div>
    
    <div class="form_section" id="main">
   		<img src="<?php echo $bc_gv['images_uri'] ?>/call.png" class="form_call" />
        <div class="register_form inputs_style_2">
        	
            <div class="form_title">
            	<?php if(function_exists('print_form_title')) print_form_title($site_id, $page_type) ?>
            </div>
            
            <?php if(function_exists('print_form')) print_form($site_id, $page_type, $site_template, $form_id, $fields_num ) ?>
        
        </div>
    </div>

</div>

<div class="decription_section">
<h1 class="description_title"><?php if(function_exists('print_description_title')) print_description_title($site_id, $page_type) ?></h1>

<div class="descrption_text">
<?php if(function_exists('print_description')) print_description($site_id, $page_type) ?>
</div>

</div>

<div class="footer">

    <div class="footer_text"><?php if(function_exists('print_footer_text')) print_footer_text($site_id, $page_type) ?></div>
    
    <?php if(function_exists('print_social_icons')) print_social_icons($site_id, $page_type) ?>

</div>

</div></div></body>

<?php if(function_exists('print_scripts_intex_footer')) print_scripts_intex_footer($site_id, $page_type) ?>

</html>
