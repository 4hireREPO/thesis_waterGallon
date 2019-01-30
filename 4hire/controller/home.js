$(document).ready(function(){

    $('select').formSelect();
    $('.modal').modal();

    $("#btn-save").click(function () {
        $.ajax({ 
            url: '../model/registrationHandler.php',
            data: { action2call: 'complete', information: getUserProfileDetails()},
            type: 'POST',
         success: function(output) {
            if(output != 0){
                result = "\n[SUCCESS][Registration] Complete Registration Successful.";
            } else {
                result = "\n[FAILED][Registration] Registration not Complete.";
            }
            console.log(result);
         }
        });
    });
});

function getUserProfileDetails(){

    //var memberid = $('#input-memUsername').val();
    var firstname = $('#input-firstname').val();
    var middlename = $('#input-middlename').val();
    var lastname = $('#input-lastname').val();
    var gender = $('#input-gender').val();
    var contactNumber = $('#input-contactNumber').val();
    var contactType = $('#input-contactType').val();
    var contactPerson = $('#input-contactPerson').val();
    var contactPersonNum = $('#input-contactPersonNum').val();
    var contactPersonRel = $('#input-contactPersonRel').val();

    var user = { "firstname":firstname, "middlename":middlename, "lastname":lastname, "gender":gender, "contactPerson":contactPerson, "contactPersonNum":contactPersonNum, "contactPersonRel":contactPersonRel };

    var myJSON = JSON.stringify(user);
    return myJSON;
}