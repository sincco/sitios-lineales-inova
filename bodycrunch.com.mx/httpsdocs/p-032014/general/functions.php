<?php

require_once('global_variables.php');

function print_css($site_id = '', $page_type = ''){
	global $bc_gv;
	
	echo '<link rel="stylesheet" type="text/css" href="'.$bc_gv['css_uri'].'/general.css" />';
	echo '<link rel="stylesheet" type="text/css" href="'.$bc_gv['css_uri'].'/template_1.css" />';
	echo '<link rel="stylesheet" type="text/css" href="'.$bc_gv['css_uri'].'/template_1_colors.css" />';
}

function print_page_title($site_id = '', $page_type = ''){
	if($page_type == 'registro'){
		echo 'Body Cruch | Regístrate para Ganar';
	}elseif($page_type == 'gracias'){
		echo 'Body Cruch | Gracias por Registrarte';
	}
}

function print_analytics($site_id = ''){ ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17539527-10']);
  _gaq.push(['_setDomainName', 'bodycrunchtv.info']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php }

function print_form($site_id = '', $page_type = '', $site_template = '', $form_id = '', $fields_num = 5){
	
	echo '<form class="jotform-form" action="http://submit.jotform.co/submit/'.$form_id.'/" method="post" name="form_'.$form_id.'" id="'.$form_id.'" accept-charset="utf-8">';
	echo '<input type="hidden" name="formID" value="'.$form_id.'" />';
	
	form_fields($fields_num);
	
	echo '<input type="hidden" id="simple_spc" name="simple_spc" value="'.$form_id.'" /><script type="text/javascript">document.getElementById("si" + "mple" + "_spc").value = "'.$form_id.'-'.$form_id.'";</script>';

	echo '</form>';
	
}

function form_fields($fields_num = 5){ 
	global $bc_gv;
	$button_text = $bc_gv['boton_text'];
	
	if(!empty($button_text)){
		$button_text = $button_text;
	}else{
		$button_text = 'Enviar';
	}
	?>


<div class="form_field">
	<input type="text" class="form-textbox validate[required, Alphabetic]" data-type="input-textbox" id="input_1" name="q1_nombre" size="25" placeholder="Nombre*" value="" />
</div>

<div class="form_field">
	<input type="text" class=" form-textbox validate[required, Email]" data-type="input-textbox" id="input_3" name="q3_email" size="25" placeholder="Email*" value="" />
</div>

<?php if ($fields_num > 2): ?>

<div class="form_field">
	<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_6" name="q6_telefono" size="25" placeholder="Teléfono*" value="" />
</div>

<div class="form_field">
	<input type="text" class=" form-textbox validate[required, Numeric]" data-type="input-textbox" id="input_4" name="q4_celular" size="25" placeholder="Celular*" value="" maxlength="13" />
</div>

<div class="form_field">
	<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_8" name="q8_estado" size="25" placeholder="Estado*" value="" />
</div>

<?php endif ?>

<div class="form_field">
	<input type="submit" id="input_2" class="button_style_1 form-submit-button" value="<?php echo $button_text ?>" />
</div>



<div style="display:none">
	Should be Empty:
	<input type="text" name="website" value="" />
</div>
<?php }



function incomplete_form_fields($name, $email){ ?>

<div class="form_field">
	<input type="hidden" data-type="input-textbox" id="input_1" name="q1_nombre" size="25" placeholder="Nombre*" value="<?php echo $name ?>" />
</div>

<div class="form_field">
	<input type="hidden" data-type="input-textbox" id="input_3" name="q3_email" size="25" placeholder="Email*" value="<?php echo $email ?>" />
</div>

<div class="form_field">
	<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_6" name="q6_telefono" size="25" placeholder="Teléfono*" value="" />
</div>

<div class="form_field">
	<input type="text" class=" form-textbox validate[required, Numeric]" data-type="input-textbox" id="input_4" name="q4_celular" size="25" placeholder="Celular*" value="" maxlength="13" />
</div>

<div class="form_field">
	<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_8" name="q8_estado" size="25" placeholder="Estado*" value="" />
</div>

<div class="form_field">
	<input type="submit" id="input_2" class="button_style_1 form-submit-button" value="Completar Registro" />
</div>

<div style="display:none">
	Should be Empty:
	<input type="text" name="website" value="" />
</div>
<?php }

function print_incomplete_form($site_id = '', $page_type = '', $site_template = '', $form_id = '', $name, $email){
	
	echo '<form class="jotform-form" action="http://submit.jotform.co/submit/'.$form_id.'/" method="post" name="form_'.$form_id.'" id="'.$form_id.'" accept-charset="utf-8">';
	echo '<input type="hidden" name="formID" value="'.$form_id.'" />';
	
	incomplete_form_fields($name, $email);
	
	echo '<input type="hidden" id="simple_spc" name="simple_spc" value="'.$form_id.'" /><script type="text/javascript">document.getElementById("si" + "mple" + "_spc").value = "'.$form_id.'-'.$form_id.'";</script>';

	echo '</form>';
	
}

function print_footer_text($site_id = '', $page_type = ''){
	echo 'Mas Ofertas Web S. A. de C. V. © 2014 | bodycrunchtv.info';
}

function print_form_title($site_id = '', $page_type = ''){
	echo '¡Empieza a bajar de peso YA!</br><span>¿A dónde te enviamos las promos?</span>';
}
function print_description_title($site_id = '', $page_type = ''){
	echo 'Body Crunch';
}
function print_description($site_id = '', $page_type = ''){ global $bc_gv;?>


    <h2>Sistema de Simetría Inversa </h2>
    <p>Body Crunch aprovecha cada movimiento para que todos los músculos trabajen con su propio peso al empujar y jalar. El movimiento que se realiza es muy simple pero muy eficaz.Combina del ejercicio aeróbico y anaeróbico.</p>
    
    <p>Puedes realizar el ejercicio de acuerdo a tu propio ritmo. Lo último en aparatos de ejercicio Algunos de los beneficios que te da Body Crunch. Ejercita los músculos de todo el cuerpo.</p>
    
    <p>Fortalece las articulaciones, tendones y ligamentos.Fortalece huesos. </p>
    <p>Sistema Dinámico Aprovecha cada movimiento para que todos los músculos trabajen. Ejercita las extremidades, el torso y los glúteos al mismo tiempo.Cuenta con 2 rutinas, una para quemar grasa y otra para tonificar.Ayuda a lograr una simetría muscular y una mejor quema de grasa. </p>
    
    <p>Producto 100% Mexicano Body Crunch es el producto de ejercicio más vendido en el mundo, además de ser 100% mexicano</p>
            
	<p>Es difícil que encuentres una promoción igual, es por tiempo limitado <a href="#main" class="scroll">¡Aprovéchala aquí!</a></p>


<?php }

function print_tnk_main($site_id = '', $page_type = ''){
	global $bc_gv; ?>
	<div class="col_set tnkyou_page">
    <div class="col_1_2 tnkyou_message">
    	<h1>Gracias por registrarte.</h1>
        <h3>En breve un especialista se pondrá en contacto contigo para aclarar todas tus dudas</h3>
    </div>

	<div class="col_1_2">
    	<h2>No esperes más y Compra Ahora</h2>
        <ul class="buy_now_list">
        	<li class="buy_online"><a href="<?php echo $bc_gv['buy_link'] ?>" class="button_style_1">COMPRA EN LÍNEA</a></li>
        	<li>
            	<a style="width:100%;margin-left:10%;" href="tel:<?php echo $bc_gv['buy_tel'] ?>">
            	<img src="<?php echo $bc_gv['images_uri'] ?>/phone_icon.png" />
                <span><?php echo $bc_gv['buy_tel'] ?></span>
                </a>
            </li>
            <li>
            	<a id="_lpChatBtn" href="https://server.iad.liveperson.net/hc/65415589/?cmd=file&file=visitorWantsToChat&site=65415589&byhref=1&imageUrl=https://server.iad.liveperson.nethttps://www.inova.com.mx/images/new_liveperson.jpg/&#39" target="chat65415589" onClick="javascript:window.open('https://server.iad.liveperson.net/hc/65415589/?cmd=file&file=visitorWantsToChat&site=65415589&imageUrl=https://server.iad.liveperson.nethttps://www.inova.com.mx/images/new_liveperson.jpg/&referrer=&#39;+escape(document.location),&#39;chat65415589&#39;,&#39;width=475,height=400,resizable=yes&#39;);return false;"
                style="width:70%;margin-left:30%;"> 
            	<img src="<?php echo $bc_gv['images_uri'] ?>/chat_icon.png" />
            	<span>Por chat</span>
                </a>
            </li>
        </ul>
    </div>

</div>
<?php }

function print_scripts_intex_footer($site_id = '', $page_type = ''){
	if($page_type == 'registro'){ ?>
    	<script>
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
	<?php }
}
function print_scripts_index_header($site_id = '', $page_type = ''){
	if($page_type == 'registro'){ ?>
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js?ver=1.9.1'></script>
	<?php }
}