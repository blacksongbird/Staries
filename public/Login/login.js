function loginUser(){
    // Values
    let email = document.querySelector("#email").value;
    let password = document.querySelector("#password").value;
    // Form validation
    if(email.split("@").length <= 1){
        document.querySelector("#form").innerHTML = "Input a valid mail";
        return;
    }
    // Async authentication add-in
    document.querySelector("#form").innerHTML = "Loading";
    StariesAccount.Login(email, password, function(exception){
        document.querySelector("#form").innerHTML = exception.message;
    });
}