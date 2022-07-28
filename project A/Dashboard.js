$(document).ready(function(){
    $('form.formCategory').on('submit',function(e){
        e.preventDefault()
        console.log("hello")
            $.ajax({
                type:"POST",
                url:"insert.php",
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(result){
                    if(result == 1){
                        $("#message").html("cette email est deja connect");
                    }
    
                }
            })
            });
    });


console.log(nameCategory)