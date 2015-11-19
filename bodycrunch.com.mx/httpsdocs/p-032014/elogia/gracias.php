<?php

require_once('../general/functions.php');

$site_id = 'elogia_bc';
$page_type = 'gracias';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


<?php if(function_exists('print_css')) print_css($site_id, $page_type) ?>

<title><?php if(function_exists('print_page_title')) print_page_title($site_id, $page_type) ?></title>

<?php if(function_exists('print_scripts_tnk_header')) print_scripts_tnk_header($site_id, $page_type) ?>

<?php if(function_exists('print_analytics')) print_analytics($site_id) ?>

</head>

<body>
<!-- End TradeDoubler tag -->
<img src="http://tbl.tradedoubler.com/report?organization=1905613&event=307404&leadNumber=<?php echo $_POST['submission_id'] ?>" border=0>

<div class="page_main_wrapper <?php echo $site_id.' '.$page_type  ?>"><div class="px1000">

<div class="tnk_logo_section">
	<div class="px1000">
		<div class="tnk_main_logo">
			<img src="<?php echo $bc_gv['images_uri'] ?>/main_logo.png" />
		</div>
	</div>
</div>

<?php if(function_exists('print_tnk_main')) print_tnk_main($site_id, $page_type) ?>

<div class="footer">

    <div class="footer_text"><?php if(function_exists('print_footer_text')) print_footer_text($site_id, $page_type) ?></div>
    
    <?php if(function_exists('print_social_icons')) print_social_icons($site_id, $page_type) ?>

</div>
</div></div></body>

<?php if(function_exists('print_scripts_tnk_footer')) print_scripts_tnk_footer($site_id, $page_type) ?>

</html>
