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
        $result = 0;

        if ($stmt->execute()) {
            $result = 1;
        } else {
            $result = 0;
        }

        $stmt->close();
                
		return $result;
    }
    
    public function save($user) {
        $obj = json_decode($user);
        $stmt = $this->db->prepare("INSERT INTO profile (memberid, firstname, middlename, lastname, gender, emergencyperson, emergencyrelation, emergencynumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $memberid, $firstname, $middlename, $lastname, $gender, $emergencyperson, $emergencyrelation, $emergencynumber);

        session_start();
        $memberid = $_SESSION['id'];
        $firstname = $obj->firstname;
        $middlename = $obj->middlename;
        $lastname = $obj->lastname;
        $gender = $obj->gender;
        $emergencyperson = $obj->contactPerson;
        $emergencyrelation = $obj->contactPersonRel;
        $emergencynumber = $obj->contactPersonNum;
        $result = 0;

        if ($stmt->execute()) {
            $result = 1;
        } else {
            $result = 0;
        }

        $stmt->close();
                
		return $result;
	}
}
?>