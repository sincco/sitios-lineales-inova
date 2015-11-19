<?php
	require("functions.php");
	
	session_start();

	#########################################################
	#### INIT System Data
	#########################################################
	$cfg = array();

	define('DATE_FORMAT_LONG', '%A %d %B, %Y');

	######################################################
	##### Configuration File ############################
	######################################################
	$dir = getcwd();
	list($b_cgibin,$a_cgibin) = strpos( $dir, 'httpdocs' ) !== false ?
		explode('httpdocs',$dir) :
		explode('cgi-bin/',$dir);
	$cfg_folder = '';

	$actual_link = "http://$_SERVER[HTTP_HOST]";
	load_custom_data();
	
	$mensaje = '';

	if( isset($_GET['dato']) )
	{
		connectDB();

		$result = mysql_query("	SELECT count(products.ID_products) as found, products.ID_products, products.Name, products.Logo, ( SELECT folio FROM code_warranty WHERE folio = '".$_GET['dato']."') AS folio
								FROM products WHERE Initial_folio <= '".$_GET['dato']."' AND Final_folio >= '".$_GET['dato']."';");

		$codigo = mysql_fetch_assoc($result);


		if( $codigo['found'] == 0 ){
			$mensaje = 'Lo lamentamos, pero el codigo es incorrecto, por favor escanea nuevamente tu codigo QR.';
		}else{
			if(	$codigo['folio'] == $_GET['dato']){
				$mensaje = 'La garantía con codigo '.$_GET['dato'].' ya ha sido registrada.';
			}else{
				$mensaje = '¡Felicidades el codigo de tu producto es correcto! <br> Por favor ingrese los siguientes datos para activar tu garantía.';
			}
		}
	}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  
 "http://www.w3.org/TR/html4/loose.dtd">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1" />
		<title>Activación de Garantías</title>
		<link rel="stylesheet" type="text/css"href="img/estilos.css" />	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</head>
	
	<body>

		<div style="background-color:#111111;"> 
			<div style="width:100%;max-width:900px; margin-left: auto ;  margin-right: auto; text-align:left;">
				<img src="img/logo2.png" height="90px" style="margin:10px;margin-bottom:25px;">
			</div>
		</div>

		<div  class="main">	
			<h1>Alta de Garantía <img src="<?=$codigo['Logo']?>" style="height:50px; background-color:#000; padding:5px; float:right;"></h1>
			<hr>
<?php 	
		if( !isset($_GET['dato']) || ( isset($_GET['dato']) && $codigo['found'] >= 0 && is_null($codigo['folio']) ) ):
?>
			<form action="activa.php" name="activacion" id="activacion" method="post">

				<h4><?= $mensaje ?><h4>

				<div style=" clear: both;">
					<div class="bloque30">
						Garantia:<br>
						<input type="text" name="id_warranty" maxlength="60" value="<?= $_GET['dato'] ?>"  class="input" autofocus >
						<br><br>
					</div>
	 
					<div class="bloque30">
						¿Dónde adquirio el producto?<br>
						<select name="purchase_origin" class=inputdrop>
							<?php 
								$origins = getEnum_values('code_warranty', 'purchase_origin');
								foreach ($origins as $value) {
									echo('<option value="'.$value.'">'.$value.'</option>'.PHP_EOL);
								}
							?>
						</select>
						<br><br>
					</div>
				</div>

				<div style=" clear: both;">
					<div class="bloque30">
						Nombre:<br>
						<input type="text" name="firstname" maxlength="60"  class="input" autofocus>
						<br><br>
					</div>

					<div class="bloque30">
						Apellido Paterno:<br>
						<input type="text" name="lastname1" maxlength="40"  class="input" autofocus>
						<br><br>
					</div>

					<div class="bloque30">
						Apellido Materno:<br>
						<input type="text" name="lastname1" maxlength="40" class="input" autofocus>
						<br><br>
					</div>
				</div>

				<div style=" clear: both;">
					<div class="bloque30">
						Teléfono (s):<br>
						<input type="text" name="phone1" maxlength="20"   class="input" autofocus> 
						<!--&nbsp;
						<input type="text" name="phone2" maxlength="20"   class="input250" autofocus>
						-->
						<br><br>
					</div>

					<div class="bloque30">
						Celular:<br>
						<input type="text" name="cellphone" maxlength="20"   class="input" autofocus>
						<br><br>
					</div>

					<div class="bloque30">
						E-mail:<br>
						<input type="text" name="email" maxlength="60"  class="input" autofocus>
						<br><br>
					</div>

					Sexo:<br>
					<input type="radio" name="sex" id="sex Masculino" value="Masculino"><label for="sex Masculino">Masculino</label> &nbsp; 
					<input type="radio" name="sex" id="sex Femenino" value="Femenino"><label for="sex Femenino">Femenino</label>
				</div>

	 			<br><br>

				<div style=" clear: both;">
					<div style="float:left;width:100%;">
						Calle:<br>
						<input type="text" name="address1" maxlength="60"   class="input" autofocus>
						<br><br>
					</div>

					<div style=" clear: both;">
						<div class="bloque30">
							Referencias:<br>
							<input type="text" name="address2" maxlength="60" class="input" autofocus>
							<br><br>
						</div>
					</div>

					<div class="bloque30">
						Delegación / Municipio:
						<br>
						<input type="text" name="urbanization" maxlength="35"  class="input" autofocus>
						<br><br>
					</div>

					<div class="bloque30">
						Ciudad:<br>
						<input type="text" name="city" maxlength="25"  class="input" autofocus>
						<br><br>
					</div>

					<div class="bloque30">
						Estado:<br>
						<select name="state" class=inputdrop>
							<?php 
								$origins = getEnum_values('customers', 'State');
								foreach ($origins as $value) {
									echo('<option value="'.$value.'" >'.$value.'</option>'.PHP_EOL);
								}
							?>
						</select>
						<br><br>
					</div>

					<div class="bloque30">
						País:<br>
						<input type="text" name="country" maxlength="20"   class="input" autofocus>
						<br><br>
					</div>

					<div class="bloque30">
						Código Postal:<br>
						<input type="text" name="zip" maxlength="5"   class="input100" autofocus>
						<br><br><br>
					</div>
				</div>	
				<h4 id='mensaje' style="color:#f00;"></h4>
				<input type="button" value="  Activar  " class="button" onclick="submit_form();">


			</form>
			<div id="xxx"></div>
			<script type="text/javascript">
				function submit_form(){

					data = $('#activacion').serialize();

					$.ajax({
						type: "POST",
						url: "activacion.php",
						data: data,
						success: function(data) {

													$('#xxx').html(data);

													if(data == 'incomplete_data'){
														$('#mensaje').html('Por favor complete los datos obligatorios.');
														$('[name="id_warranty"], [name="purchase_origin"], [name="firstname"], [name="lastname1"], [name="lastname2"], [name="phone1"], [name="email"]').css('border-color','#f00');
													}else if(data=='already_registered'){
														$('#mensaje').html('La garantía ya ha sido registrada previamente.');
													}else if(data=='wrong_code'){
														$('#mensaje').html('El codigo de la garantía es incorrecto.');
													}else if(data=='OK'){
														window.location = "mensaje.php";
													}

												}
					})
				}
			</script>
<?php
		else:
				echo '<h4>'. $mensaje .'<h4>';
		endif;
?>

			
			<center>
				<br><a href="privacidad.html" target="_blank">Politíticas de Privacidad</a>
			</center>
		</div>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51145920-1', 'inova.com.mx');
		  ga('send', 'pageview');
		</script>

	</body>
</html>