 var expr=/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9_\-]+\.[a-zA-Z0-9_\-\.]+$/;
    $(function() {
        $("#ref_login").click(function(){
            $("#dialog").dialog("open");
        });
        $("#dialog").dialog({
            autoOpen: false,
            width: 400,
            buttons: [
                {
                    text: "Ok",
                    click: function() {
                        str=$("#frm_login").serialize();
                        $.post('index/login',str, function(data) {
                            if(data!='correcto'){
                            $("#error_login").html('datos incorrectos');
                            }else{
                                window.location='cliente/';
                            }
                        });
                        
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

        $("#registrar").click(function(){
            $("#dialog2").dialog("open");
        });
        $("#dialog2").dialog({
            autoOpen: false,
            width: 400,
            buttons: [
                {
                    text: "Ok",
                    click: function() {
                        var user=$("#user").val();
                        var nombre=$("#nombre").val();
                        var apellido=$("#apellidos").val();
                        var email=$("#email").val();
                        var pasw=$("#pass").val()
                        var confi=$("#confirmar").val()
                        if(user==""){
                            $("#mensaje1").fadeIn();
                            return false;
                        }else{
                            $("#mensaje1").fadeOut();
                            if(nombre==""){
                                $("#mensaje2").fadeIn();
                                return false;
                            }else{
                                $("#mensaje2").fadeOut();
                                if(apellido==""){
                                   $("#mensaje3").fadeIn();
                                    return false; 
                                }else{
                                    $("#mensaje3").fadeOut();
                                    if(email=="" || !expr.test(email)){
                                        $("#mensaje4").fadeIn();
                                        return false; 
                                    }else{
                                        $("#mensaje4").fadeOut();
                                        if(pasw==""){
                                            $("#mensaje5").fadeIn();
                                            return false; 
                                        }else{
                                            $("#mensaje5").fadeOut();
                                            if(confi==""){
                                                $("#mensaje6").fadeIn();
                                                return false; 
                                            }else{
                                                $("#mensaje6").fadeOut();
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        con1=$('#pass').val();
                        con2=$('#confirmar').val();
                        if(con1==con2){
                    str=$("#frm_registro").serialize();
                    $.post('index/registro',str, function(data) {
                    console.log(data);
                   });
                        $(this).dialog("close");
                        alert('datos guardados correctamente XD');
                    }else{
                        alert('las contraseñas no son iguales');
                    }
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
        
        $('#serar').click(function(){
            $.post(base_url+'index/cerrar','nada', function(data) {
                window.location=base_url;
            });
        });
            
    });
