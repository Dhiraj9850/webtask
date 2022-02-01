var password = document.forms['form']['password'];

var pass_error = document.getElementById('pass_error');

password.addEventListener('textInput',password_verify);

function validated(){
    if(password.value.length < 8){
        password.style.border = "1px solid red";
        pass_error.style.display = "block";
        password.focus();
        return false;
    }
    else{
        console.log("please enter the correct password");
    }
}
function password_verify(){
    if(password.value.length >= 8){
        password.style.border = "1px solid green";
        pass_error.style.display = "none";
        return true;
    }
}