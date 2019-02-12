<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	
	public function getReGrade($username)
	{
		$this->load->model('UserModel');
		$result = $this->UserModel->getregrade($username);
		$data = [
			'result' => $result
		];
		$this->load->view("index",$data);
	}

	public function login()
	{
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$this->load->model('UserModel');
			$result = $this->UserModel->login($username,$password);
			if($_SESSION['login']!=null)
			{
				if($_SESSION['role']=="Student")
				{
					$this->load->model('UserModel');
					$result = $this->UserModel->getregrade($username);
					$data = [
						'result' => $result
					];
					$this->load->view("index",$data);
				}
				else
				{
					
				}
			}
			else
			{
				$this->load->view("login");
				echo "<script type='text/javascript'>alert('wrong username or password');</script>";
			}
		
		}

	}

	
	// $studentid,$studentname,$year,$courseID,$courseName,$term,$grade
	public function delete($historyid)
	{
		$this->load->model('UserModel');
		$result = $this->UserModel->delete($historyid);
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function editReGrade($historyid) 
	{
		$this->load->model('HistoryModel');
		$result = $this->HistoryModel->editReGrade($historyid);
		$data = [
			'result' => $results
		];
		$this->load->view('edithistory');
	}

	public function update(){
		$historyid = $_POST['historyid'];
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
		 $this->load->model('HistoryModel');
		 $result = $this->HistoryModel->update($data,$historyid);
		 if ($result){
			 $this.getReGrade($data->studentid);
		 }
		 else{
			 echo "false";
		 }

	}
	public function getStudent()
	{
		$this->load->model('UserModel');
		$result = $this->UserModel->getStudent();
		$data = [
			'result' => $result
		];
		$this->load->view("student",$data);
	}

}