function GuardarDatoAdicional(id, inv, valor) {
  $.ajax({
    async: false,
    type: "post",
    dataType: "json",
    contentType: "application/x-www-form-urlencoded",
    url:
      "http://pii.secolima.gob.mx/wbienes/01/Inventarios/Bienes/GuardarDatoAdicional",
    data: "id_inv=" + inv + "&tipo=" + id + "&valor=" + valor,
    success: function(d) {},
    error: function(xhr, ajaxOptions, thrownError) {
      alert(xhr.status);
      alert(thrownError);
    }
  });
}

var valores = document.getElementsByClassName("sorting_1");
for (i = 0; i < valores.length; i++) {
  GuardarDatoAdicional(1, valores[i].innerHTML, 1);
}

x = 0;
for (i = 0; i < tDisponibilidad.length; i++) {
  if (tDisponibilidad[i].xProducto == "UNIDAD CENTRAL DE PROCESO") {
    x++;
    console.log("Núm." + x + " " + tDisponibilidad[i].xId_Inventario);
  }
}
