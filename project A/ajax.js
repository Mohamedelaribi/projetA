$(document).ready(function(){
    $('input[type ="radio"]').click(function(){
        var type = $(this).val();
        console.log(type)
    
    $("#submit").click(function(){
        $.ajax({
            type:"POST",
            url:"inscriptionCode.php",
            data:{
                nom:$("#lastName").val(),
                prenom:$("#firstName").val(),
                email:$("#Email").val(),
                telephone:$("#telephone").val(),
                password:$("#password").val(),
                type:type,
            },
            success:function(result){
                if(result == 1){
                    $("#message").html("cette email est deja connect");
                }
                else{
                    window.location="Dashboard.php";

                }

            }
        })
        });
    });
});



