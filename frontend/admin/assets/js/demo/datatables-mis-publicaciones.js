// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    "language": {
      "sProcessing":     "Procesando...",
      "sLengthMenu":     "Mostrar _MENU_ publicaciones",
      "sZeroRecords":    "No se encontraron publicaciones",
      "sEmptyTable":     "Aún no has hecho ninguna publicación",
      "sInfo":           "Mostrando publicaciones del _START_ al _END_ de un total de _TOTAL_ publicaciones",
      "sInfoEmpty":      "Mostrando publicaciones del 0 al 0 de un total de 0 publicaciones",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ publicaciones)",
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
      "targets": [0],
      "width": "15%",
    }],
    "columnDefs": [{                 
      "targets": [1],
      "width": "15%",
    }],
    "columnDefs": [{                 
      "targets": [2],
      "width": "5%",
    }],
    "columnDefs": [{                 
      "targets": [3],
      "width": "15%",
    }],
    "columnDefs": [{                 
      "targets": [4],
      "width": "10%",
    }]

  });
});
