<div  class="main">	
	<h1>Acceso <img src="<?=$codigo["Logo"]?>" style="height:50px; background-color:#000; padding:5px; float:right;"></h1>
	<hr>
	<form action="activa.php" name="login" id="login" method="post">
		<div style=" clear: both;">
			<div class="bloque30">
				Usuario:<br>
				<input type="text" name="UserName" maxlength="60" value="<?= $_GET["dato"] ?>"  class="input" autofocus requerido >
				<br><br>
			</div>
			<div class="bloque30">
				Password:<br>
				<input type="password" name="Password" maxlength="60" value="<?= $_GET["dato"] ?>"  class="input" autofocus requerido >
			</div>
			<input type="button" value="  Entrar  " class="button" onclick="submit_form()">
		</div>
	</form>
	<br><br><hr>
</div>
<script type="text/javascript">
function submit_form(){
	$.ajax({
	  type: "POST",
	  url: "<?= BASE_URL ?>admin/login",
    data: $("#login").serialize(),
	  success: function (data) {
      if(data == 0) {
        alert("Usuario no valido")
      } else {
	//console.log(data)
        window.location.replace("<?= BASE_URL ?>admin");
      }
	  },
	  error: function (xhr) {
	    console.log(xhr.responseText)
	  }
	})
}
</script>