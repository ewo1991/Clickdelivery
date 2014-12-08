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
    
    $("#atras").click(function(){
        window.location=base_url+'empresa/';
    });
    
    $("#subir_foto_empresa").click(function(){
        $("#dialog_empresa").dialog("open");
        });
        
    $("#dialog_empresa").dialog({
            autoOpen: false,
            width: 400,
            buttons: [
                {
                    text: "Ok",
                    click: function() {
                        $(this).dialog("close");
                    }
                },
                {
                    text: "Cancel",
                    click: function() {
                        $(this).dialog("close");
                    }
                }
            ],
        });
        
    Dropzone.autoDiscover = false;
    $("#dropzone").dropzone({
            url: base_url+"empresa/imagen_empresa",
            addRemoveLinks: true,
            maxFileSize: 1000,
            dictResponseError: "Ha ocurrido un error en el server",
            acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF,.rar,application/pdf,.psd',
            complete: function(file)
            {
                    if(file.status == "success")
                    {
                            alert("El siguiente archivo ha subido correctamente: " + file.name);
                            $('#nombre_foto').attr('value',file.name);
                    }
            },
            error: function(file)
            {
                    alert("Error subiendo el archivo " + file.name);
            },
            removedfile: function(file, serverFileName)
            {
                    var name = file.name;
                    $.ajax({
                            type: "POST",
                            url: base_url+"empresa/imagen_empresa?delete=true",
                            data: "filename="+name,
                            success: function(data)
                            {
                                    var json = JSON.parse(data);
                                    if(json.res == true)
                                    {
                                            var element;
                                            (element = file.previewElement) != null ? 
                                            element.parentNode.removeChild(file.previewElement) : 
                                            false;
                                            alert("El elemento fué eliminado: " + name); 
                                    }
                            }
                    });
            }
    });
    
});