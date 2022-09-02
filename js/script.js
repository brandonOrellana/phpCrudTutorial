$(document).ready(function () {
    // adding users
    $(document).on("submit","#addForm",function(e){
        e.preventDefault();
        // ajax
        $.ajax({
            url:"/phpcrud/ajax.php",
            type:"POST",
            dataType:"json",
            data: new FormData(this),
            processData:false,
            contentType:false,
            beforeSend:function(){
                console.log("waiting...data is loading");
            },
            success:function(response){
                console.log(response);
            },
            error:function(request,error){
                console.log(arguments);
                console.log("El Error es:"+ error);
            }
        });
    });
});