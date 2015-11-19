	<h1>Consulta de información <img src="<?=$codigo["Logo"]?>" style="height:50px; background-color:#000; padding:5px; float:right;"></h1>
	<hr>
	<form action="activa.php" name="busqueda" id="busqueda" method="post">
		<div style=" clear: both;">
			<div class="bloque30">
				Folio Inicial:
				<input type="text" id="folioInicial" name="folioInicial" maxlength="10" value="<?= $_GET["dato"] ?>"  class="input" autofocus requerido >
        Folio Final:
        <input type="text" id="folioFinal" name="folioFinal" maxlength="10" value="<?= $_GET["dato"] ?>"  class="input" autofocus requerido >
				<br><br>
			</div>
			<div class="bloque30">
				UPC:<br>
				<input type="text" id="UPC" name="UPC" maxlength="60" value="<?= $_GET["dato"] ?>"  class="input" autofocus requerido >
			</div>
      <div class="bloque30">
        Descripción:<br>
        <input type="text" id="Descripcion" name="Descripcion" maxlength="60" value="<?= $_GET["dato"] ?>"  class="input" autofocus requerido >
      </div>
      <div class="bloque30">
        Nombre del cliente:<br>
        <input type="text" id="Nombre" name="Nombre" maxlength="60" value="<?= $_GET["dato"] ?>"  class="input" autofocus requerido >
      </div>
			<input type="button" value="  Buscar  " class="button" onclick="submit_form()">
		</div>
	</form>
	<br><br><hr>
	<div id="exportar"></div>
  <div id="grid_garantias" class="handsontable"></div>
	<div id="dialog" title="inova"></div>
</div>
<script type="text/javascript">
var
  data = [],
  grid = document.getElementById("grid_garantias"),
  hot

hot = new Handsontable(grid, {
  data: data,
  minSpareRows: 1,
  colHeaders: true,
  fixedRowsTop: 0,
  columnSorting: true,
  colWidths: [55, 250, 100, 150, 150, 70,70],
  colHeaders: ["Folio", "Nombre", "UPC","Descripción", "Correo", "Telefono", "Origen"],
  columns: [
    {data:"Folio", readOnly: true},
    {data:"Nombre", readOnly: true},
    {data:"UPC", readOnly: true},
    {data:"Description", readOnly: true},
    {data:"Email", readOnly: true},
    {data:"Phone1", readOnly: true},
    {data:"Origin", readOnly: true}
  ], 
  contextMenu: false
})

$.ajax({
  type: "GET",
  url: "<?= BASE_URL ?>garantias/grid",
  contentType: "application/json",
  dataType: "json",
  async: true,
  processData: false,
  cache: false,
  success: function (data) {
    hot.loadData(data)
    if(data.length > 1) {
      $("#exportar").html("<a target='_blank' href='<?= BASE_URL ?>garantias/exportar?" + $("#busqueda").serialize() + "'>Exportar</a>")
    } else {
      $("#exportar").html("")
    }
  },
  error: function (xhr) {
    console.log(xhr.responseText)
  }
})


function submit_form(){
	$.ajax({
	  type: "POST",
	  url: "<?= BASE_URL ?>garantias/grid",
    data: $("#busqueda").serialize(),
	  dataType: "json",
	  async: true,
	  processData: true,
	  cache: false,
	  success: function (data) {
	    hot.loadData(data)
      console.log(data.length)
      if(data.length > 1) {
        $("#exportar").html("<a target='_blank' href='#' onclick='<?= BASE_URL ?>garantias/exportar?" + $("#busqueda").serialize() + "'>Exportar</a>")
      } else {
        $("#exportar").html("")
      }
	  },
	  error: function (xhr) {
	    console.log(xhr.responseText)
	  }
	})
}

function exportar(){
  <?= BASE_URL ?>garantias/exportar?$("#busqueda").serialize()
  $.ajax({
    type: "POST",
    url: "<?= BASE_URL ?>garantias/grid",
    data: $("#busqueda").serialize(),
    dataType: "json",
    async: true,
    processData: true,
    cache: false,
    success: function (data) {
      hot.loadData(data)
      console.log(data.length)
      if(data.length > 1) {
        $("#exportar").html("<a href='#' onclick='exportar()'>Exportar</a>")
      } else {
        $("#exportar").html("")
      }
    },
    error: function (xhr) {
      console.log(xhr.responseText)
    }
  })
}
</script>