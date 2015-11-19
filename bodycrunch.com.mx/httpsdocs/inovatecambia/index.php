<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$codigo = generateRandomString(7);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Inova te Cambia | Registro</title>

<link href="assets/css/framework.css" rel="stylesheet" />
<link href="assets/css/main.css" rel="stylesheet" />

<script src="http://d2g9qbzl5h49rh.cloudfront.net/static/prototype.forms.js" type="text/javascript"></script>
<script src="http://d2g9qbzl5h49rh.cloudfront.net/static/jotform.forms.js?3.3.7839" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      JotForm.calendarMonths = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
      JotForm.calendarDays = ["Domingo","Lunes","Jueves","Miércoles","Jueves","Viernes","sábado","Domingo"];
      JotForm.calendarOther = {"today":"Hoy"};
      JotForm.setCalendar("11", false, false);
      JotForm.formatDate({date:(new Date()), dateField:$("id_"+11)});
      JotForm.displayLocalTime("hour_11", "min_11", "ampm_11");
      JotForm.initCaptcha('input_21');
      JotForm.alterTexts({"alphabetic":"Este campo solo puede contener letras","alphanumeric":"Este campo solo puede contener letras y números.","characterLimitError":"Too many Characters.  The limit is","confirmClearForm":"¿Está seguro de querer borra el formulario?","confirmEmail":"Correo electrónico no coincide","currency":"Este campo sólo puede contener valores de moneda","email":"Introduzca una dirección e-mail válida","fillMask":"El valor de campo debe llenar la mascara","generalError":"Existen errores en el formulario, por favor corríjalos antes de continuar.","generalPageError":"Hay errores en esta página. Por favor, corríjalos antes de continuar.","gradingScoreError":"El puntaje total debería ser sólo \"menos que\" o \"igual que\"","incompleteFields":"Existen campos requeridos incompletos. Por favor complételos.","inputCarretErrorA":"El valor introducido no puede ser menor que el mínimo especificado:","inputCarretErrorB":"Entrada no debe ser mas grande que el valor maximo:","lessThan":"Tu cuenta debería ser menor o igual que","maxDigitsError":"El máximo de dígitos permitido es","maxSelectionsError":"El número máximo de selecciones es","minSelectionsError":"El número mínimo de selección requerido es","multipleFileUploads_emptyError":"El fichero {file} está vacío; por favor, selecciona de nuevo los ficheros sin él.","multipleFileUploads_fileLimitError":"Solo {fileLimit} carga de archivos permitida.","multipleFileUploads_minSizeError":"{file} is demasiado pequeño, el tamaño mínimo de fichero es: {minSizeLimit}.","multipleFileUploads_onLeave":"Se están cargando los ficheros, si cierras ahora, se cancelará dicha carga.","multipleFileUploads_sizeError":"{file} es demasiado grande; el tamaño del archivo no debe superar los {sizeLimit}.","multipleFileUploads_typeError":"El fichero {file} posee una extensión no permitida. Sólo están permitidas las extensiones {extensions}.","numeric":"Este campo sólo admite valores numéricos","pastDatesDisallowed":"La fecha debe ser futura","pleaseWait":"Por favor, espere ...","required":"Campo requerido.","requireEveryCell":"Todas las celdas son requeridas.","requireEveryRow":"Todas las filas son obligatorias.","requireOne":"Por lo menos un campo requerido","submissionLimit":"¡Lo siento! Sólo se permite una entrada. Múltiples envíos están desactivados para este formulario.","uploadExtensions":"Solo puede subir los siguientes archivos:","uploadFilesize":"Tamaño del archivo no puede ser mayor que:","wordLimitError":"Too many words. The limit is"});
      JotForm.clearFieldOnHide="disable";
      JotForm.onSubmissionError="jumpToSubmit";
   });
</script>

</head>

<body>

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
            
            <div id="form_section" class="ingrid-7">
                <div class="ingrid-12 align-right">
                    <img src="assets/images/title_1.png" alt="Tu puedes ser el afortunado" id="title_1" />
                </div>
                
                <div id="form_wrapper">
                    <div id="form_header_wrapper" class="ingrid-12 align-center">
                        <img src="assets/images/form_header.png" alt="Resgistra tu compra y cámbiate de casa" id="form_header" />
                        
                    </div>
                    
                    
<div id="form">
<form class="jotform-form" action="http://submit.jotform.co/submit/51817270951861/" method="post" enctype="multipart/form-data" name="form_51817270951861" id="51817270951861" accept-charset="utf-8" >
  <input type="hidden" name="formID" value="51817270951861" />
    
    <div id="steps_wrapper" class="ingrid-12 form-all">
    
		<div class="form_step current_step" data-step="step_1">
        	<div id="form_pasos" class="paso_1"></div>
            
      		<div class="form-line jf-required" data-type="control_textbox" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="input_3">Nombre Completo</label>
        <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_3" name="q3_nombreCompleto" size="50" value="" />
      </div>
      
      <div class="form-line form-line-column form-col-1 jf-required" data-type="control_dropdown" id="id_19">
        <label class="form-label form-label-top" id="label_19" for="input_19">Estado</label>
		<select class="form-dropdown validate[required]"  id="input_19" name="q19_estado19">
            <option value="">- Seleccionar Estado - </option>
            <option value="Aguascalientes"> Aguascalientes </option>
            <option value="Baja California"> Baja California </option>
            <option value="Baja California Sur"> Baja California Sur </option>
            <option value="Campeche"> Campeche </option>
            <option value="Chiapas"> Chiapas </option>
            <option value="Chihuahua"> Chihuahua </option>
            <option value="Coahuila"> Coahuila </option>
            <option value="Colima"> Colima </option>
            <option value="Distrito Federal"> Distrito Federal </option>
            <option value="Durango"> Durango </option>
            <option value="Estado de México"> Estado de México </option>
            <option value="Guanajuato"> Guanajuato </option>
            <option value="Guerrero"> Guerrero </option>
            <option value="Hidalgo"> Hidalgo </option>
            <option value="Jalisco"> Jalisco </option>
            <option value="Michoacán"> Michoacán </option>
            <option value="Morelos"> Morelos </option>
            <option value="Nayarit"> Nayarit </option>
            <option value="Nuevo León"> Nuevo León </option>
            <option value="Oaxaca"> Oaxaca </option>
            <option value="Puebla"> Puebla </option>
            <option value="Querétaro"> Querétaro </option>
            <option value="Quintana Roo"> Quintana Roo </option>
            <option value="San Luis Potosí"> San Luis Potosí </option>
            <option value="Sinaloa"> Sinaloa </option>
            <option value="Sonora"> Sonora </option>
            <option value="Tabasco"> Tabasco </option>
            <option value="Tamaulipas"> Tamaulipas </option>
            <option value="Tlaxcala"> Tlaxcala </option>
            <option value="Veracruz"> Veracruz </option>
            <option value="Yucatán"> Yucatán </option>
            <option value="Zacatecas"> Zacatecas </option>
          </select>
      </div>
      
      <div class="form-line form-line-column form-col-2 jf-required" data-type="control_textbox" id="id_15">
        <label class="form-label form-label-top" id="label_15" for="input_15">Dirección Completa</label>
        <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_15" name="q15_direccionCompleta" size="50" value="" />
      </div>
      
      <div class="form-line jf-required" data-type="control_textbox" id="id_14">
        <label class="form-label form-label-top" id="label_14" for="input_14">Número de IFE o Pasaporte</label>
        <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_14" name="q14_numeroDe14" size="30" value="" />
      </div>
      
      <div class="form-line form-line-column form-col-1 jf-required field_half_first" data-type="control_textbox" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6">LADA Teléfono</label>
        <input type="text" class=" form-textbox validate[required, Numeric]" data-type="input-textbox" id="input_6" name="q6_ladaTelefono" size="25" value="" />
      </div>
      
      <div class="form-line form-line-column form-col-2 field_half" data-type="control_textbox" id="id_7">
        <label class="form-label form-label-top" id="label_7" for="input_7"> LADA Teléfono 2 </label>
        <input type="text" class=" form-textbox" data-type="input-textbox" id="input_7" name="q7_ladaTelefono7" size="25" value="" />
      </div>
      
      <div class="form-line jf-required" data-type="control_textbox" id="id_8">
        <label class="form-label form-label-top" id="label_8" for="input_8">E Mail</label>
        <input type="text" class=" form-textbox validate[required, Email]" data-type="input-textbox" id="input_8" name="q8_eMail" size="45" value="" />
      </div>
      		<div id="form_footer" class="ingrid-12">
				<img src="assets/images/siguiente_btn.png" class="siguiente_btn" />
			</div>
		</div><!--step 1 -->
      
		<div class="form_step" data-step="step_2">
      	<div id="form_pasos" class="paso_2 anterior_btn"></div>
        
      <div class="form-line jf-required" data-type="control_textbox" id="id_9">
        <label class="form-label form-label-top" id="label_9" for="input_9">Número de Ticket, Orden o Factura</label>
        <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_9" name="q9_numeroDe9" size="45" value="" />
      </div>
      
      <div class="form-line jf-required" data-type="control_fileupload" id="id_10">
        <label class="form-label form-label-top" id="label_10" for="input_10">Imagen del comprobante de compra</label>
        <input class="form-upload validate[required]" type="file" id="input_10" name="q10_agregaLa10" file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" file-maxsize="1024" file-minsize="0" file-limit="0" />
      </div>
      
      <div class="form-line jf-required" data-type="control_datetime" id="id_11">
        <label class="form-label form-label-top" id="label_11" for="input_11">Fecha de compra</label>
          <span class="form-sub-label-container third" style="vertical-align: top">
            <input class="currentDate form-textbox validate[required]" id="day_11" name="q11_fechaDe11[day]" type="tel" size="2" maxlength="2" value="09" />
            <label class="form-sub-label" for="day_11" id="sublabel_day" > Día </label>
          </span>
          <span class="form-sub-label-container third" style="vertical-align: top">
            <input class="form-textbox validate[required]" id="month_11" name="q11_fechaDe11[month]" type="tel" size="2" maxlength="2" value="07" />
            <label class="form-sub-label" for="month_11" id="sublabel_month" > Mes </label>
          </span>
          <span class="form-sub-label-container third" style="vertical-align: top">
            <input class="form-textbox validate[required]" id="year_11" name="q11_fechaDe11[year]" type="tel" size="4" maxlength="4" value="2015" />
            <label class="form-sub-label" for="year_11" id="sublabel_year" > Año </label>
          </span>
          <span class="form-sub-label-container third_last" style="vertical-align: top">
            <img class="showAutoCalendar" alt="Seleccióna una fecha" id="input_11_pick" src="http://d2g9qbzl5h49rh.cloudfront.net/images/calendar.png" align="absmiddle" />
            <label class="form-sub-label" for="input_11_pick" >  </label>
          </span>
      </div>
      
      <div class="form-line jf-required field_half_first" data-type="control_textbox" id="id_12">
        <label class="form-label form-label-top" id="label_12" for="input_12">Importe de compra</label>
        <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_12" name="q12_importeDe" size="20" value="" />
      </div>
      
      <div class="form-line jf-required field_half" data-type="control_dropdown" id="id_13">
        <label class="form-label form-label-top" id="label_13" for="input_13">Producto Comprado</label>
          <select class="form-dropdown validate[required]"  id="input_13" name="q13_modeloComprado">
            <option value="Body Crunch Evol"> Body Crunch Evol </option>
            <option value="Body Crunch Clasico"> Body Crunch Clásico </option>
            <option value="Sognare"> Sognare </option>
            <option value="Dermawand"> Dermawand </option>
          </select>
      </div>
      
		<div class="form-line jf-required" data-type="control_checkbox" id="id_20">
			<input type="checkbox" class="form-checkbox validate[required]" id="input_20_0" name="q20_input20[]" value="Acepto Bases, Condiciones y Mecánica de la Promoción" />
			<label id="label_input_20_0" for="input_20_0"> Acepto Bases, Condiciones y Mecánica de la Promoción </label>
		</div>
      
      <div class="form-line jf-required" data-type="control_textbox" id="id_22">
          <input type="hidden" class=" form-textbox validate[required]" data-type="input-textbox" id="input_22" name="q22_codigo" size="20" value="<?php echo $codigo ?>" />
      </div>
      
      <div style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </div>
      
		<div id="form_footer" class="ingrid-12">
        	<span class="anterior_btn">< Paso 1</span>           
        	<button id="input_2" type="submit" class="form-submit-button form-submit-button-img image_button submit_button">
				<img src="assets/images/enviar.png" />
			</button>
		</div>
            
      </div><!--step 2 -->
      
      </div><!-- step wrapper -->
  
  <input type="hidden" id="simple_spc" name="simple_spc" value="51817270951861" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "51817270951861-51817270951861";
  </script>
</form>
</div>

</div><!-- #form_wrapper -->
            </div><!-- #form_section -->
            
        </div><!-- #main_content -->
        
        <div id="media_section" class="ingrid-12">
            <div id="video_wrapper">
            <iframe width="400px" height="226px" src="http://www.youtube.com/embed/9ul0fFPlaR8?rel=0&vq=hd720&modestbranding=1&showinfo=0&autohide=1&controls=0&rel=0" frameborder="0"></iframe>
            <img src="assets/images/video_hover.png" id="video_hover" />
            </div>
        </div>
        
        <div class="ingrid-12 align-center">
            <img src="assets/images/ribbon.png" id="ribbon" />
        </div>
        
        <div id="footer_products" class="ingrid-12">
            <div class="footer_prod ingrid-3">
            	<a href="http://www.inova.com.mx/2517-Sognare-6-Almohadas.aspx">
                	<img src="assets/images/p_sognare.png" id="p_sognare" />
                </a>
            </div>
            <div class="footer_prod ingrid-3">
            	<a href="http://www.inova.com.mx/2513-Body-Crunch-Evol.aspx">
                	<img src="assets/images/p_bc_evol.png" id="p_bc_evol" />
                </a>
            </div>
            <div class="footer_prod ingrid-3">
            	<a href="http://www.inova.com.mx/99-Body-Crunch.aspx">
                	<img src="assets/images/p_bc.png" id="p_bc" />
                </a>
            </div>
            <div class="footer_prod ingrid-3">
            	<a href="http://www.inova.com.mx/1055-DermaWand.aspx">
                	<img src="assets/images/p_dermawand.png" id="p_dermawand" />
                </a>
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
	$('.anterior_btn').click(function(){
		var goto = $(this).data('goto');
		var cur = $('.current_step');
		var prev = $(cur).prev('.form_step');
	
		cur.hide().removeClass('current_step').addClass('next');
		prev.fadeIn().addClass('current_step').removeClass('prev');

	});
	
	$('.siguiente_btn').click(function(){
		var goto = $(this).data('goto');
		var cur = $('.current_step');
		var next = $(cur).next('.form_step');
		
		cur.hide().removeClass('current_step').addClass('prev');
		next.fadeIn().addClass('current_step').removeClass('next');
	});
	
	$('a.lightbox').prettyPhoto({social_tools:false});
	
});
</script>
</body>
</html>