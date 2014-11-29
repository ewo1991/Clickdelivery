$(function(){
   $('#b_nuevo_plato').click(function(){
       seria_form=$('#form_nuvo_plato').serialize();
       $.post(base_url+'empresa/guardar_nuevo_plato',seria_form,function(data){
           $("#cuerpo_empresa").empty().append(data);
       });
   });
});