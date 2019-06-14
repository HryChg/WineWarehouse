// Within form, convert action to url and add id="form"
// Add this jquery script after your form:
// - submit button must have class: submit-form
// - the include php in your ui must be wrapped in a div (in this case, id: "storedin-table")
// - load the view file for your table
{/* <script>
$(document).ready(function() {
    $(".submit-form").click(function(e) {
        $("#storedin-table").load(\'../../php/StoredIn/defaultView-storedin.php\');
    });
});
</script>' */}

$(document).ready(function() {
    $(".storedin-submit").click(function(e) {
        e.preventDefault();
        var form = $("#storedin-form").serializeArray();
        var data = {};
        $(form).each(function(id, obj){
            data[obj.name] = obj.value;
        });
        // alert($("#storedin-form").serialize()); // Debug Tool
        $.ajax({
            url: $("#storedin-form").attr("url"),
            method: "POST",
            data: data,
            success: function(){
                $("#storedin-form")[0].reset(); 
                $("#storedin-table").load('../../php/StoredIn/defaultView-storedin.php');               
            },
            error: function(xhr){
                var err = JSON.parse(xhr.responseText);
                alert(err.Message + " Record unable to be added.");
            }
        });
    });
});
