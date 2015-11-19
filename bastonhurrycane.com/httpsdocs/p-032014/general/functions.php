<?php

function print_form($site_id = '', $page_type = '', $site_template = '', $form_id = ''){
	
	echo '<form class="jotform-form" action="http://submit.jotform.co/submit/'.$form_id.'/" method="post" name="form_'.$form_id.'" id="'.$form_id.'" accept-charset="utf-8">';
	echo '<input type="hidden" name="formID" value="'.$form_id.'" />';
	
	form_fields();
	
	echo '<input type="hidden" id="simple_spc" name="simple_spc" value="'.$form_id.'" /><script type="text/javascript">document.getElementById("si" + "mple" + "_spc").value = "'.$form_id.'-'.$form_id.'";</script>';

	echo '</form>';
	
}

function form_fields(){ ?>


<div class="form_field" style="width:400px;margin:0 auto;float:none">
	<input type="text" class="form-textbox validate[required, Alphabetic]" data-type="input-textbox" id="input_1" name="q1_nombre" size="25" placeholder="Nombre*" value="" />
</div>

<div class="form_field" style="width:400px;margin:0 auto;float:none">
	<input type="text" class=" form-textbox validate[required, Email]" data-type="input-textbox" id="input_3" name="q3_email" size="25" placeholder="Email*" value="" />
</div>


<div class="form_field" style="width:400px;margin:0 auto;float:none">
	<input type="submit" id="input_2" class="button_style_1 form-submit-button" value="¡Lo quiero ya!" />
</div>



<div style="display:none">
	Should be Empty:
	<input type="text" name="website" value="" />
</div>
<?php }



function incomplete_form_fields($name, $email){ ?>
<div style="float:left;width:100%;height:20px;"></div>
<div class="form_field">
	<input type="hidden" data-type="input-textbox" id="input_1" name="q1_nombre" size="25" placeholder="Nombre*" value="<?php echo $name ?>" />
</div>
<div style="float:left;width:100%;height:20px;"></div>
<div class="form_field">
	<input type="hidden" data-type="input-textbox" id="input_3" name="q3_email" size="25" placeholder="Email*" value="<?php echo $email ?>" />
</div>
<div style="float:left;width:100%;height:20px;"></div>
<div class="form_field" style="width:400px;margin:0 auto;float:none">
	<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_6" name="q6_telefono" size="25" placeholder="Teléfono*" value="" />
</div>
<div style="float:left;width:100%;height:20px;"></div>
<div class="form_field" style="width:400px;margin:0 auto;float:none">
	<input type="text" class=" form-textbox validate[required, Numeric]" data-type="input-textbox" id="input_4" name="q4_celular" size="25" placeholder="Celular*" value="" maxlength="13" />
</div>
<div style="float:left;width:100%;height:20px;"></div>
<div class="form_field" style="width:400px;margin:0 auto;float:none">
	<input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_8" name="q8_estado" size="25" placeholder="Estado*" value="" />
</div>
<div style="float:left;width:100%;height:30px;"></div>
<div class="form_field" style="width:400px;margin:0 auto;float:none">
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