<?php namespace Login;

require_once '../commons/dbconfig.php';
use Configuration\Database;

class Login {
    
    protected $db;
    
    public function __construct() {	
		$this->db = Database::GetInstance();
	}

	public function authenticate($user) {
        $obj = json_decode($user);
        $stmt = $this->db->prepare("SELECT * FROM member WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);

        $username = $obj->username;
        $password = $obj->password;
        $json = 0;

        if ($stmt->execute()) {
            # get result
            $result = $stmt->get_result();
            # fetch object
            $object = $result->fetch_object();
            if($object != null) {
                $json = json_encode($object);
            }
        }

        $stmt->close();
                
		return $json;
	}
}
?>