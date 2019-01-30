<?php namespace LoginHandler;

require_once 'login.php';
use Login\Login;

if(isset($_POST['action2call'])) {
    $action = $_POST['action2call'];
    $user = $_POST['information'];
    
    if($action == "login") {
        $login = new Login();
        $result = $login->authenticate($user);
        if( $result != "0" ){
            session_start();

            $obj = json_decode($result);
            $id = $obj->memberid;

            $_SESSION['id'] = $id;
        }
        echo $result;
    }

}

?>