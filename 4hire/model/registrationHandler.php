<?php namespace RegistrationHandler;

require_once 'registration.php';
use Registration\Registration;

if(isset($_POST['action2call'])) {
    $action = $_POST['action2call'];
    $user = $_POST['information'];
    
    if($action == "register") {
        $registration = new Registration();
        $result = $registration->create($user);
        echo $result;
    }

}

?>