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
        $sql = "SELECT * FORM user WHERE username = '".$username."'";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function login($username , $password){
        $sql = "SELECT * FORM user WHERE username = ".$username."AND"."password".$password;
        $query = $this->db->query($sql);
        foreach ($query->result() as $row ){
            $_SESSION['username'] = $row->username;
            $_SESSION['password'] = $row->password;
            $_SESSION['login'] = true;
        }
    }
}
