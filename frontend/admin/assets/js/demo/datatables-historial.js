// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    "language": {
      "sProcessing":     "Procesando...",
      "sLengthMenu":     "Mostrar _MENU_ paises",
      "sZeroRecords":    "No se encontraron paises",
      "sEmptyTable":     "Aún no hay paises",
      "sInfo":           "Mostrando paises del _START_ al _END_ de un total de _TOTAL_ paises",
      "sInfoEmpty":      "Mostrando paises del 0 al 0 de un total de 0 paises",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ paises)",
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
