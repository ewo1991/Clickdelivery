$(function(){
    $('#enviar_act_empresa').click(function(){
        seria_empresa=$('#form_actu_empresa').serialize();
        $.post(base_url+'empresa/guardar_empresa',seria_empresa,function(data){
            
        });
    });
    $('#actualizar_act_empresa').click(function(){
        seria_emp=$('#form_actu_empresa').serialize();
        $.post(base_url+'empresa/actualiza_empresa',seria_emp,function(data){
            
        });
    });
});