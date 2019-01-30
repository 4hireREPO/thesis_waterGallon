<?php namespace RegistrationHandler;

require_once 'registration.php';
use Registration\Registration;

if(isset($_POST['action2call'])) {
    $action = $_POST['action2call'];
    $user = $_POST['information'];

    $registration = new Registration();
    
    if($action == "register") {
        $result = $registration->create($user);
        echo $result;
    }

    if($action == "complete") {
        $result = $registration->save($user);
        echo $result;
    }

    $registration = null;
}

?>