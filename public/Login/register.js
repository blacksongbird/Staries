function registerUser(){
    // Values
    let email = document.querySelector("#email2").value;
    let password = document.querySelector("#password").value;
    let repeatPassword = document.querySelector("#password2").value;
    // Form validation
    if(password != repeatPassword){
        document.querySelector("#form").innerHTML = "Passwords are not the same";
        return;
    }else if(email.split("@").length <= 1){
        document.querySelector("#form").innerHTML = "Input a valid mail";
        return;
    }
    // Async authentication add-in
    document.querySelector("#form").innerHTML = "Loading";
    StariesAccount.Register(email, password, function(exception){
        document.querySelector("#form").innerHTML = exception.message;
    });
}