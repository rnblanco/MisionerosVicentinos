// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    "language": {
      "sProcessing":     "Procesando...",
      "sLengthMenu":     "Mostrar _MENU_ vínculos",
      "sZeroRecords":    "No se encontraron vínculos",
      "sEmptyTable":     "Aún no hay vínculos",
      "sInfo":           "Mostrando vínculos del _START_ al _END_ de un total de _TOTAL_ vínculos",
      "sInfoEmpty":      "Mostrando vínculos del 0 al 0 de un total de 0 vínculos",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ vínculos)",
      "sInfoPostFix":    "",
      "sSearch":         "Buscar:",
      "sUrl":            "",
      "sInfoThousands":  ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
        "sFirst":    "Primera",
        "sLast":     "Última",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      },
      "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
      }
    }

  });
});
