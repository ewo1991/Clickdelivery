$(function(){
   $("#nosotros").click(function(){
       $.post(base_url+'index/nosotros',function(data) {
            $("#botones_inicio").empty().append(data);
        });
   });
});