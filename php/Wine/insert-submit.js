// Selects add-wine form and posts data to url, reloading table upon success
$(document).ready(function() {
    $(".add-wine").click(function(e) {
        e.preventDefault();
        var form = $("#add-wine").serializeArray();
        var data = {};
        $(form).each(function(id, obj){
            data[obj.name] = obj.value;
        });
        // alert($("#add-wine").serialize()); // Debug Tool
        $.ajax({
            url: $("#add-wine").attr("url"),
            method: "POST",
            data: data,
            success: function(){
                $("#add-wine")[0].reset();    
                $("#wine-table").load('../../php/Wine/defaultView-wine.php');            
            },
            error: function(xhr){
                var err = JSON.parse(xhr.responseText);
                alert(err.Message + " Record unable to be added.");
            }
        });
    });
});