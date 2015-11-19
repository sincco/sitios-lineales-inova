<div  class="main">	
	<h1>Alta de Garantía <img src="<?=$codigo["Logo"]?>" style="height:50px; background-color:#000; padding:5px; float:right;"></h1>
	<hr>
	<form action="activa.php" name="activacion" id="activacion" method="post">

		<h4><h4>

		<div style=" clear: both;">
			<div class="bloque30">
				Garantia:<br>
				<input type="text" name="Folio" id="Folio" maxlength="60" value="<?= $_GET["dato"] ?>" class="input" autofocus requerido >
				<br><br>
			</div>

			<div class="bloque30">
				Producto:<br>
				<div id="desProducto"></div>
			</div>

			<div class="bloque30">
				¿Dónde adquirio el producto?<br>
				<select name="Origin" class="inputdrop" requerido>
					<option value=""></option>
				<?php 
					foreach ($_origenes as $value) {
						echo("<option value=\"{$value}\" >{$value}</option>".PHP_EOL);
					}
				?>
				</select>
				<br><br>
			</div>
		</div>

		<div style=" clear: both;">
			<div class="bloque30">
				Nombre:<br>
				<input type="text" name="FirstName" maxlength="60"  class="input" autofocus requerido>
				<br><br>
			</div>

			<div class="bloque30">
				Apellido Paterno:<br>
				<input type="text" name="LastName1" maxlength="40"  class="input" autofocus requerido>
				<br><br>
			</div>

			<div class="bloque30">
				Apellido Materno:<br>
				<input type="text" name="LastName2" maxlength="40" class="input" autofocus requerido>
				<br><br>
			</div>
		</div>

		<div style=" clear: both;">
			<div class="bloque30">
				Teléfono (s):<br>
				<input type="text" name="Phone1" maxlength="20" class="input" autofocus requerido> 
				<br><br>
			</div>

			<div class="bloque30">
				Celular:<br>
				<input type="text" name="Cellphone" maxlength="20" class="input" autofocus>
				<br><br>
			</div>

			<div class="bloque30">
				E-mail:<br>
				<input type="text" name="email" id="email" maxlength="60"  class="input" autofocus requerido email>
				<br><br>
			</div>

			Género:<br>
			<input type="radio" name="Gender" id="sex Masculino" value="Male"><label for="sex Masculino">Masculino</label> &nbsp; 
			<input type="radio" name="Gender" id="sex Femenino" value="Female"><label for="sex Femenino">Femenino</label>
		</div>

			<br><br>

		<div style=" clear: both;">
			<div style="float:left;width:100%;">
				Calle:<br>
				<input type="text" name="Address1" maxlength="60" class="input" autofocus>
				<br><br>
			</div>

			<div style=" clear: both;">
				<div class="bloque30">
					Referencias:<br>
					<input type="text" name="Address2" maxlength="60" class="input" autofocus>
					<br><br>
				</div>
			</div>

			<div class="bloque30">
				Delegación / Municipio:
				<br>
				<input type="text" name="Urbanization" maxlength="35"  class="input" autofocus>
				<br><br>
			</div>

			<div class="bloque30">
				Ciudad:<br>
				<input type="text" name="City" maxlength="25"  class="input" autofocus>
				<br><br>
			</div>

			<div class="bloque30">
				Estado:<br>
				<select name="State" class="inputdrop" requerido>
					<option value=""></option>
				<?php 
					foreach ($_estados as $value) {
						echo("<option value=\"{$value}\" >{$value}</option>".PHP_EOL);
					}
				?>
				</select>
				<br><br>
			</div>

			<div class="bloque30">
				País:<br>
				<input type="text" name="Country" maxlength="20" class="input" value="México" autofocus requerido>
				<br><br>
			</div>

			<div class="bloque30">
				Código Postal:<br>
				<input type="text" name="Zip" maxlength="5" class="input100" autofocus requerido numerico>
				<br><br><br>
			</div>
		</div>	
		<h4 id="mensaje" style="color:#f00;"></h4>
		<input type="button" value="  Activar  " class="button" onclick="submit_form();">
	</form>
	<div id="dialog" title="INOVA"></div>
</div>
<script type="text/javascript">
$(document).ready(function (){
	_general.vincularCapturas()
})

function submit_form() {
	if(_general.incompletos()) {
		$("#dialog").html("<h4><center>Debes capturar la información requerida</center></h4>")
		$("#dialog").dialog({modal: true})
	} else {
		if(_general.emailValido()) {
			var _data = $("#activacion").serialize()
			$.ajax({
				type: "POST",
				url: "<?= BASE_URL ?>garantias/activacion",
				data: _data,
				success: function(data) {
					console.log(data)
					if(data > 0) {
						$("#dialog").html("<h4><center>Hemos registrado tu garantía</center></h4>")
						$("#dialog").dialog({modal: true,buttons: {
			        Ok: function() {
			          $( this ).dialog( "close" )
			          location.reload()
			        }
			      }})
					} else {
						if(data == -1) {
							$("#dialog").html("<h4><center>Error.<br>La garantía ya fue registrada previamente</center></h4>")
							$("#dialog").dialog({modal: true})
						}
						if(data == -2) {
							$("#dialog").html("<h4><center>Error.<br>Este número de garantía no es válido</center></h4>")
							$("#dialog").dialog({modal: true})
						}
					}
				}
			})
		} else {
			$("#dialog").html("<h4><center>Por favor, captura un correo válido</center></h4>")
			$("#dialog").dialog({modal: true})
		}
	}
}

$("#Folio").focusout(function(event) {
	$.ajax({
    type: "GET",
    url: "<?= BASE_URL ?>folios/descripcion/" + $("#Folio").val(),
    contentType: "application/json",
    dataType: "json",
    async: true,
    processData: true,
    cache: false,
    success: function (data) {
    	if(data.respuesta.length > 0)
      	$("#desProducto").html("<strong>" + data.respuesta[0].Description + "</strong>")
    },
    error: function (xhr) {
      console.log(xhr.responseText)
    }
  })
})
</script>