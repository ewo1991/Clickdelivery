$(function(){ 
    $(".b_plato").click(function(){
            $("#dialog_plato").dialog("open");
        });

    $("#dialog_plato").dialog({
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
});