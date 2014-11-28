$(function(){
   $('#plato_em').DataTable({
            "paging": false,
            "sPaginationType": "full_numbers",
            "bJQueryUI": true,
            "language": {
                "lengthMenu": "filas _MENU_ ",
                "zeroRecords": "No hay registros que coincidan con la busqueda",
                "info": "Mostrando _PAGE_ de _PAGES_ entradas",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)"
            }
        }); 
   $('.actualizar').click(function(){alert('hola');
       idplato=$(this).attr('idplato');
       alert(idplato);
   });
   
   $('.eliminar').click(function(){
       alert('eliminar');
   });
});