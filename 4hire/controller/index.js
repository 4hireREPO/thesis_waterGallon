$(document).ready(function() {
   
    $('.modal').modal();

    $("#btn-register").click(function () {
        $.ajax({ 
            url: 'model/registrationHandler.php',
            data: { action2call: 'register', information: getUserRegistrationDetails()},
            type: 'POST',
         success: function(output) {
            console.log(output);
         }
        });
    });

    $("#btn-login").click(function () {
        $.ajax({ 
            url: 'model/loginHandler.php',
            data: { action2call: 'login', information: getUserLoginDetails()},
            type: 'POST',
         success: function(output) {
            if(output != 0 ){
                result = "\n[SUCCESS][Login] Login Successful.";
                navigateToHome();
            } else {
                result = "\n[FAILED][Login] Account not found.";
            }
            console.log(result + " - " + output);
         }
        });
    });
});

function navigateToHome() {
    window.location.href = "view/home.php";
}

function getUserRegistrationDetails(){
    var username = $('#input-memUsername').val();
    var password = $('#input-memPassword').val();
    var email = $('#input-email').val();

    var user = { "username":username, "password":password, "email":email };

    var myJSON = JSON.stringify(user);
    return myJSON;
}

function getUserLoginDetails(){
    var username = $('#input-username').val();
    var password = $('#input-password').val();

    var user = { "username":username, "password":password };

    var myJSON = JSON.stringify(user);
    return myJSON;
}
