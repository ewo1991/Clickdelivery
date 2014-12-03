$(function(){
   $('.b_dely').click(function(){
       idrest=$(this).attr('idrest');
       window.location=base_url+'delivery/index/idresta='+idrest;
   });
});