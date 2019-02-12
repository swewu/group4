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

    public function getReGrade($username)
    {
        $sql = "SELECT * FROM historygrade WHERE studentid = '".$username."'";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        $_SESSION['login'] = false;
        $rows = $query->result();
        foreach ($rows as $row) {
            $_SESSION['username'] = $row->username;
            $_SESSION['password'] = $row->password;
            $_SESSION['role'] = $row->role;
            $_SESSION['login'] = true;
        }
    }
    public function delete($historyid)
    {
        $sql = "DELETE FROM historygrade WHERE historyid = '".$historyid."'";
        $query = $this->db->query($sql);
    }
    public function getStudent()
    {
        $sql = "SELECT * FROM historygrade";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
