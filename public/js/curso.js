
//funcao abrir modal 
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});

//funcao submit
window.submit_curso = function(){
    document.getElementById("id_form_curso").submit();
}

//timeout
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);


