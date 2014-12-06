$(function(){
   $('#enviar_act_cliente').click(function(){
      dato_cliente=$('#form_actu_cliente').serialize();
      $.post(base_url+'cliente/actualizar_dato_cliente',dato_cliente,function(data){
          alert('datos actulizados');
      });
   });
   
   $("#subir_foto_cliente").click(function(){
        $("#dialog_cliente").dialog("open");
        });
    $("#dialog_cliente").dialog({
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
                            $('#foto_cliente').attr('value',file.name);
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

