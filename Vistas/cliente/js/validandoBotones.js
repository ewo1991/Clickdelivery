$(function(){
   $("#b_mis_datos").click(function(){
       $.post(base_url+'cliente/mis_datos',function(data){
           $("#cuerpo_cliente").empty().append(data);
       });
   }) ;
   
   $('#b_mis_pedi').click(function(){
       $.post(base_url+'cliente/mis_pedidos',function(data){
           $("#cuerpo_cliente").empty().append(data);
       });
   });
});

