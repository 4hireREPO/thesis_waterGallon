$(document).ready(function() {
   
    $('.modal').modal();

    $("#btn-register").click(function () {
        $.ajax({ 
            url: 'model/registrationHandler.php',
            data: { action2call: 'register', information: getUserDetails()},
            type: 'POST',
         success: function(output) {
                      console.log(output);
         }
        });
    });

    $("#btn-login").click(function () {
        navigateToHome();
    });
});

function navigateToHome() {
    window.location.href = "view/home.php";
}

function getUserDetails(){
    var username = $('#input-memUsername').val();
    var password = $('#input-memPassword').val();
    var email = $('#input-email').val();

    var user = { "username":username, "password":password, "email":email };

    var myJSON = JSON.stringify(user);
    return myJSON;
}
