$(function(){
   $("#nosotros").click(function(){
       $.post('index/nosotros','nada', function(data) {
            $("#cuerpo").empty().append(data);
        });
   });
});