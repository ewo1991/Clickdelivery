$(function(){
   $('#b_nuevo_plato').click(function(){
       seria_form=$('#form_nuvo_plato').serialize();
       $.post(base_url+'empresa/guardar_nuevo_plato',seria_form,function(data){
           $("#cuerpo_empresa").empty().append(data);
       });
   });
   
   $("#b_subir_foto_plato_act").click(function(){
        $("#dialog_nuevo_plato").dialog("open");
        });
    
    $("#dialog_nuevo_plato").dialog({
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
                            $('#foto_plato_nuevo').attr('value',file.name);
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