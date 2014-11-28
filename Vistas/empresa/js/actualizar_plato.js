$(function(){
   $('#actualizar_pla').click(function(){
       dato_plat=$('#form_edit_plato').serialize();
       $.post(base_url+'empresa/editar_plato',dato_plat,function(data){
           $("#cuerpo_empresa").empty().append(data);
       })
   }) ;
});
