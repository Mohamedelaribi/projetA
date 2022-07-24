$(document).ready(function(){
    $('#formCategory').on('sbmit', function(event){
event.preventDefault(); 
var image = $("#ImgCategory").val();
if(image == ''){
    alert("ajouter un image")
}else{
    $.ajax({
        URL : "insert.php",
        method : "POST",
        data : new FormData(this),
        contentType : false,
        caches : false,
        prosseData : false,
        success:function(data){
            $("#ImgCategory").val();
        }
    })
}
    });
})