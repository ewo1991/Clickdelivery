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
   $('.actualizar').click(function(){
       idplato=$(this).attr('idplato');
       nombre_plato=$('#nombre_plato'+idplato).val();
       precio_plato=$('#precio_plato'+idplato).val();
       descripcion_plato=$('#descripcion_plato'+idplato).val();
       $.post(base_url+'empresa/pagina_editar_plato','idplato='+idplato+'&nom_plato='+nombre_plato+'&precio_plato='+precio_plato+'&descr_plato='+descripcion_plato,function(data){
           $("#cuerpo_empresa").empty().append(data);
       })
   });
   
   $('.eliminar').click(function(){
       idplatoeli=$(this).attr('idplato');
       $.post(base_url+'empresa/eliiminar_plato','idplato='+idplatoeli,function(data){
           $("#cuerpo_empresa").empty().append(data);
       });
   });
   
   $('#b_nuevo_plato').click(function(){
       $.post(base_url+'empresa/pagina_nuevo_plato',function(data){
           $("#cuerpo_empresa").empty().append(data);
       });
   });
   $('#b_atras').click(function(){
        window.location=base_url+'empresa/';
    });
});