$(function(){ 
    var id_plato;
    var nom_plato;
    var prec_plato;
    $(".b_plato").click(function(){
        id_plato=$(this).attr('idplato');
        nom_plato=$('#nombre_pl'+id_plato).val();
        prec_plato=$('#precio_pl'+id_plato).val();
        $("#dialog_plato").dialog("open");
        });

    $("#dialog_plato").dialog({
            autoOpen: false,
            width: 400,
            buttons: [
                {
                    text: "Ok",
                    click: function() {
                        canti=$('#cantidad').val();
                        total=canti*prec_plato;
                        $('#tablita').html(
                            '<tr>\n\
                                <td>'+nom_plato+'</td>\n\
                                <td>'+prec_plato+'</td>\n\
                                <td>'+canti+'</td>\n\
                                <td>'+total+'</td>\n\
                            </tr>'
                        );
                        $('#cantidad').val('');
                        $(this).dialog("close");
                    }
                },
                {
                    text: "Cancel",
                    click: function() {
                        $('#cantidad').val('');
                        $(this).dialog("close");
                    }
                }
            ],
        });
});