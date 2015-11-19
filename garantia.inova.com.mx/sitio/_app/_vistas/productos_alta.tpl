	<h1>Alta de UPC <img src="<?=$codigo["Logo"]?>" style="height:50px; background-color:#000; padding:5px; float:right;"></h1>
	<hr>
	<form action="activa.php" name="activacion" id="activacion" method="post">
		<div style=" clear: both;">
			<div class="bloque30">
				UPC:<br>
				<input type="text" id="UPC" maxlength="60" value="<?= $_GET["dato"] ?>"  class="input" autofocus requerido >
				<br><br>
			</div>
			<div class="bloque30">
				Descripcion:<br>
				<input type="text" id="Description" maxlength="60" value="<?= $_GET["dato"] ?>"  class="input" autofocus requerido >
			</div>
			<input type="button" value="  Buscar  " class="button" onclick="submit_form()">
		</div>
	</form>
	<br><br><hr>
	<div id="grid_productos" class="handsontable"></div>
	<div id="dialog" title="inova"></div>
</div>
<script type="text/javascript">
var
  data = [],
  grid = document.getElementById("grid_productos"),
  hot

hot = new Handsontable(grid, {
  data: data,
  minSpareRows: 1,
  colHeaders: true,
  rowHeaders: true,
  fixedRowsTop: 0,
  columnSorting: true,
  colHeaders: ["UPC", "Descripcion"],
  columns: [
    {data:"UPC", readOnly: false},
    {data:"Description", readOnly: false}
  ], 
  contextMenu: true,
  beforeRemoveRow: function(index, filas) {
    var fila = hot.getDataAtRow(index)
    $.ajax({
      type: "POST",
      url: "<?= BASE_URL ?>productos/borra",
      data: {
        "UPC":fila[0],
        "Description":fila[1]
      },
      success: function (data) {
        //console.log(data)
      },
      error: function (xhr) {
        console.log(xhr)
      }
    })
  },
  afterChange: function (changes, source) {
    if ((source == "edit" || source == "paste")) {
    //Escucha de cambios
      var fila = hot.getDataAtRow(changes[0][0])
      if(fila[0]) {
        if(fila[1]) {
          $.ajax({
            type: "POST",
            url: "<?= BASE_URL ?>productos/guarda",
            data: {
              "UPC":fila[0],
              "Description":fila[1]
            },
            success: function (data) {
              //console.log(data)
            },
            error: function (xhr) {
              console.log(xhr)
            }
          })
        }
      }
    }
  }
})

$.ajax({
  type: "GET",
  url: "<?= BASE_URL ?>productos/grid",
  contentType: "application/json",
  dataType: "json",
  async: true,
  processData: false,
  cache: false,
  success: function (data) {
    hot.loadData(data)
  },
  error: function (xhr) {
    console.log(xhr.responseText)
  }
})


function submit_form(){
	$.ajax({
	  type: "GET",
	  url: "<?= BASE_URL ?>productos/grid?UPC=" + $("#UPC").val() + "&Description=" + $("#Description").val(),
	  contentType: "application/json",
	  dataType: "json",
	  async: true,
	  processData: false,
	  cache: false,
	  success: function (data) {
	    hot.loadData(data)
	  },
	  error: function (xhr) {
	    console.log(xhr.responseText)
	  }
	})
}
</script>