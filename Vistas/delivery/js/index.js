$(function(){ 
    var id_plato;
    var nom_plato;
    var prec_plato;
    var total_final=0;
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
                        idrestaurante=$('#idrestaurant').val();
                        $('#idresta').attr('value',idrestaurante);
                        total_final=total_final+total;
                        $('#totat_final').html(total_final);
                        $('#antes').before(
                            '<tr>\n\
                                <td>'+nom_plato+'<input type="hidden" name="plato_mombre[]" id="plato_nombre" value="'+nom_plato+'"><input type="hidden" name="id_plat[]" id="id_plat" value="'+id_plato+'"></td>\n\
                                <td>'+prec_plato+'<input type="hidden" name="plato_precio[]" id="plato_precio" value="'+prec_plato+'"></td>\n\
                                <td>'+canti+'<input type="hidden" name="plato_cantidad[]" id="plato_cantidad" value="'+canti+'"></td>\n\
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
        
    $('#b_compra_delivery').click(function(){
        sery_dely=$('#form_carrito').serialize();
        if (document.getElementById('map-canvas')){
 
    // Coordinates to center the map
    var myLatlng = new google.maps.LatLng(-6.487568355931707,-76.3644183021545);
 
    // Other options for the map, pretty much selfexplanatory
    var mapOptions = {
        zoom: 14,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    // Attach a map to the DOM Element, with the defined settings
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

}
        $.post(base_url+'delivery/empesar_envio',sery_dely,function(data){
       })
       $("#dialog_mensaje").dialog("open");
    });
    
    $("#dialog_mensaje").dialog({
            autoOpen: false,
            width: 530,
            buttons: [
                {
                    text: "Ok",
                    click: function() {
                        window.location=base_url+'index';
                    }
                },
                {
                    text: "Cancel",
                    click: function() {
                        window.location=base_url+'index';
                    }
                }
            ],
        });
});