var submitButton= document.getElementById("submit")
var inputs =document.getElementsByClassName("inputs")
var email =document.getElementById("Email")
var emailValidation="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
var validatio =0
submitButton.addEventListener("click", validation);
function validation(e){

    for(i=0; i<inputs.length;i++){
        e.preventDefault()
        if(inputs[i].value==''){    
            inputs[i].style.borderColor = "red"
            validatio ++;
        }

        }
        
    }
            









