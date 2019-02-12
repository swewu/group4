<?php

class UserModel extends CI_Model
{

    public function create($id, $username, $password, $role)
    {
        $data = array(
            'userid' => $id,
            'username' => $username,
            'password' => $password,
            'role' => $role,
        );
        $this->db->insert('user', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function getReGrade($username){
        $sql = "SELECT * FROM historygrade WHERE studentid = '".$username."'";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function login($username , $password){
        $sql = "SELECT * FROM user WHERE username = ".$username."AND"."password".$password;
        $query = $this->db->query($sql);
        foreach ($query->result() as $row ){
            $_SESSION['username'] = $row->username;
            $_SESSION['password'] = $row->password;
            $_SESSION['login'] = true;
        }
    }

    public function insert($studentid,$studentname,$year,$courseID,$courseName,$term,$grade){
		// $this->load->model('UserModel');
		// $result = $this->UserModel->insert($studentid,$coursid,$year,$term,$grade);
			
		$data = array(         
			'studentid' => $studentid,         
			'studentname' => $studentname,         
			'year' => $year,
			'courseid' => $courseid,  
            'courseName' => $courseName,
            'term' => $term,
            'grade' => $grade  
		 ); 
		 $this->db->insert('historygrade', $data); 
		 
 
	}
}
