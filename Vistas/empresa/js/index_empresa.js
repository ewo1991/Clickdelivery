$(function(){
   $('#b_mis_datos_empresa').click(function(){
       $.post(base_url+'empresa/datos_empresa',function(data){
           $("#cuerpo_empresa").empty().append(data);
       });
   }) ;
   $('#b_mis_plato_empresa').click(function(){
       $.post(base_url+'empresa/plato_empresa',function(data){
           $("#cuerpo_empresa").empty().append(data);
       });
   }) ;
   
});


