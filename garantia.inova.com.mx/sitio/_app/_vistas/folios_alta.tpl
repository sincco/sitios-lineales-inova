	<h1>Alta de folios <img src="<?=$codigo["Logo"]?>" style="height:50px; background-color:#000; padding:5px; float:right;"></h1>
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
  colHeaders: ["UPC", "Descripcion", "Inicial", "Final"],
  columns: [
    {data:"UPC"},
    {data:"Description", readOnly: true},
    {data:"Initial", type: "numeric"},
    {data:"Final", type: "numeric"},
    {data:"ID", type: "numeric", visible: false}
  ],
  colWidths: [120, 250, 80, 80, 1],
  contextMenu: true,
  contextMenu: ['remove_row'],
  beforeRemoveRow: function (index, amount) {
    var fila = hot.getDataAtRow(index)
    if(fila[4]) {
      $.ajax({
        type: "POST",
        url: "<?= BASE_URL ?>folios/borra",
        data: {
          "ID":fila[4]
        },
        success: function (data) {
          console.log("alta ",data)
        },
        error: function (xhr) {
          console.log(xhr)
        }
      })
    }
  },
  afterChange: function (changes, source) {
    if ((source == "edit" || source == "paste")) {
      //Se captura el UPC
      if('UPC' == changes[0][1]) {
        $.ajax({
          type: "POST",
          url: "<?= BASE_URL ?>folios/upcDescripcion",
          data: {
            "UPC":changes[0][3]
          },
          success: function (data) {
            data = JSON.parse(data)
            if(data.respuesta.length > 0) {
              var fila = hot.getDataAtRow(changes[0][0])
              hot.setDataAtCell(changes[0][0],1,data.respuesta[0].Description)
            //Y se inserta el registro en ceros
              $.ajax({
                type: "POST",
                url: "<?= BASE_URL ?>folios/guarda",
                data: {
                  "UPC":fila[0],
                  "Initial":fila[2],
                  "Final":fila[3]
                },
                success: function (data) {
                  data = JSON.parse(data)
                  console.log(data.respuesta)
                  if(data.respuesta.length > 0) {
                    var fila = hot.getDataAtRow(changes[0][0])
                    hot.setDataAtCell(changes[0][0],4,data.respuesta)
                  }
                },
                error: function (xhr) {
                  console.log(xhr)
                }
              })
            }
          },
          error: function (xhr) {
            console.log(xhr)
          }
        })
      } else {
      //Se captura el folio
        var fila = hot.getDataAtRow(changes[0][0])
        //console.log(fila)
        if(fila[0]) {
          if(fila[4]) {
            $.ajax({
              type: "POST",
              url: "<?= BASE_URL ?>folios/guarda",
              data: {
                "ID":fila[4],
                "UPC":fila[0],
                "Initial":fila[2],
                "Final":fila[3]
              },
              success: function (data) {
                //console.log("alta ",data)
              },
              error: function (xhr) {
                console.log(xhr)
              }
            })
          }
        }
      }
    }
  }
})

$.ajax({
  type: "GET",
  url: "<?= BASE_URL ?>folios/grid",
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
	  url: "<?= BASE_URL ?>folios/grid?UPC=" + $("#UPC").val() + "&Description=" + $("#Description").val(),
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