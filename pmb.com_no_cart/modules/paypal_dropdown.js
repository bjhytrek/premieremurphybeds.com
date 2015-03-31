var tiers = $('#tiers');
var colors = $('#colors');
tiers.ready(function (){
   var selectedText = $("#tiers option:selected").val();
    $("#colors option[class='0']").show();
            $("#colors option[class='1']").hide();
            $("#colors option[class='2']").hide();
}
);
tiers.change(function () {
    var selectedText = $("#tiers option:selected").val();
    $('#colors').val('empty');
    switch (selectedText) {
        case "Standard Colors":
            $("#colors option[class='0']").show();
            $("#colors option[class='1']").hide();
            $("#colors option[class='2']").hide();
            
            break;
        case "Premium Colors":
            $("#colors option[class='0']").hide();
            $("#colors option[class='2']").hide();
            $("#colors option[class='1']").show();
   
            break;
        case "Premier Colors":
            $("#colors option[class='0']").hide();
            $("#colors option[class='1']").hide();
            $("#colors option[class='2']").show();
            break;

    }
    
}
)(jQuery);