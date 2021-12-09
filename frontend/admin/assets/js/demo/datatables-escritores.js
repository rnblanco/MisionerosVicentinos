// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    "language": {
      "sProcessing":     "Procesando...",
      "sLengthMenu":     "Mostrar _MENU_ escritores",
      "sZeroRecords":    "No se encontraron escritores",
      "sEmptyTable":     "Aún no hay escritores",
      "sInfo":           "Mostrando escritores del _START_ al _END_ de un total de _TOTAL_ escritores",
      "sInfoEmpty":      "Mostrando escritores del 0 al 0 de un total de 0 escritores",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ escritores)",
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
    },
    "columnDefs": [{                 
      "targets": [5],
      "width": "5%",
    }],
    "columnDefs": [{                 
      "targets": [6],
      "width": "7%",
    }]

  });
});
