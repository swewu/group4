<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subject extends CI_Controller 
{

	public function add()
	{
		$this->load->view('AddSubject');
	}


	public function insert(){
		// $this->load->model('UserModel');
		// $result = $this->UserModel->insert($studentid,$coursid,$year,$term,$grade);
		$text = 'บันทึกสำเร็จ';

		$data = array(         
			'studentid' => $_POST['studentid'],         
			'studentname' => $_POST['studentname'],         
			'year' => $_POST['year'],
			'courseid' => $_POST['courseid'],  
            'courseName' => $_POST['courseName'],
            'term' => $_POST['term'],
            'grade' => $_POST['grade']  
		 );
		 $this->db->insert('historygrade',$data); 
		 echo "$text";

		

		 
 
	}

}
