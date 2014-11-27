$(function(){
   $('#enviar_act_cliente').click(function(){
      dato_cliente=$('#form_actu_cliente').serialize();
      $.post(base_url+'cliente/actualizar_dato_cliente',dato_cliente,function(data){
          
      });
   });
});

