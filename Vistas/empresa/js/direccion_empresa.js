$(function(){

        var direcion=$('#direccion').attr('value');
        var caracter=direcion.split('/');
        var cordenadas=caracter[0];
        var uno=cordenadas.replace('(', '');
        var dos=uno.replace(')', '');
        var dividir=dos.split(',');
        var long=dividir[0];
        var lat=dividir[1];
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
//Creo un evento asociado a "mapa" cuando se hace "click" sobre el
var coordenadas = new google.maps.LatLng(long,lat);
            marcador = new google.maps.Marker({
                position: coordenadas,
                map: map,
                animation: google.maps.Animation.DROP,
                title: "Ubicación de Cliente"});
            //Obtengo las coordenadas separadas
            


});