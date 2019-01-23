<?php namespace Registration;

require_once '../commons/dbconfig.php';
use Configuration\Database;

class Registration {
    
    protected $db;
    
    public function __construct() {	
		$this->db = Database::GetInstance();
	}

	public function create($user) {
        $obj = json_decode($user);
        $stmt = $this->db->prepare("INSERT INTO member (username, password, email, status, membertype, joindate, isverified) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiisi", $username, $password, $email, $status, $memberType, $date, $isverified);

        $username = $obj->username;
        $password = $obj->password;
        $email = $obj->email;
        $status = 0;
        $memberType = 0;
        $date = date('Y-m-d H:i:s');
        $isverified = 0;
        $result = "";

        if ($stmt->execute()) {
            $result = "\n[SUCCESS][Registration] Record created successfully.";
            $stmt->close();
        } else {
            $result = "\n[FAILED][Registration] Record not created.";
        }
                
		return $result;
	}
}
?>