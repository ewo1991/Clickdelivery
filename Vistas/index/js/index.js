$(function(){
   $('.b_dely').click(function(){
       idrest=$(this).attr('idrest');
       window.location=base_url+'delivery/index/idresta='+idrest;
   });
   $('#b_buscar_rest').click(function(){
       dato=$('#buscar_restaurante').val();
       $.post(base_url+'index/busqueda_restaurant','dato='+dato,function(data){
           $("#restau").empty().append(data);
       });
   });
});