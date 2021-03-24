//texto
var editor1 = CKEDITOR.replace( 'summary-ckeditor' );
editor1.config.height = 800;

//funcao abrir modal 
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});

//funcao submit
window.submit_sobre = function(){
    document.getElementById("id_form_sobre").submit();
}

//timeout
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);


