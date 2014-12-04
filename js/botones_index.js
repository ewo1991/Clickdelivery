$(function(){
   $("#nosotros").click(function(){
       $.post(base_url+'index/nosotros',function(data) {
            $("#botones_inicio").empty().append(data);
        });
   });

   $("#contactenos").click(function(){
       $.post(base_url+'index/contactenos',function(data) {
            $("#botones_inicio").empty().append(data);
        });
   });
   
   $('#inicio').click(function(){
       window.location=base_url+'index';
   });

});