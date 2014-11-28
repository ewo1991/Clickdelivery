$(function(){
   $('#plato_em').DataTable({
            "paging": true,
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
       nombre_plato=$('#nombre_plato'+idplato).val();
       precio_plato=$('#precio_plato'+idplato).val();
       descripcion_plato=$('#descripcion_plato'+idplato).val();
       $.post(base_url+'empresa/editar_plato','idplato='+idplato+'&nom_plato='+nombre_plato+'&precio_plato='+precio_plato+'&descr_plato='+precio_plato,function(data){
           $("#cuerpo_empresa").empty().append(data);
       })
   });
   
   $('.eliminar').click(function(){
       alert('eliminar');
   });
});