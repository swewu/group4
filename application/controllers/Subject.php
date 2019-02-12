<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subject extends CI_Controller
{
	public function add()
	{
		$this->load->view('AddSubject');
	}


	public function insert()
	{
		$data = array(
			'studentid' => $_POST['studentid'],
			'studentname' => $_POST['studentname'],
			'year' => $_POST['year'],
			'courseid' => $_POST['courseid'],
			'courseName' => $_POST['courseName'],
			'term' => $_POST['term'],
			'grade' => $_POST['grade'],
			'status' => $_POST['status']
		);
		$this->db->insert('historygrade', $data);
	}
}
