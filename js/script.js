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
                if(response){
                    $("#usermodal").modal("hiden");
                    $("#addform")[0].reset();
                }
            },
            error:function(request,error){
                console.log(arguments);
                console.log("El Error es:"+ error);
            }
        });
    });


    // get users function
    function getusers(){
        var pageno = $("#currentpage").val();
        $.ajax({
            url:"/phpcrud/ajax.php",
            type:"GET",
            dataType:"json",
            data:{page:pageno,action:'getallusers'},
            beforeSend:function(){
                console.log("waiting...data is loading");
            },
            success:function(row){
                console.log(row);
            },
            error:function(request,error){
                console.log(arguments);
                console.log("El Error es:"+ error);
            }
        })
    }
});