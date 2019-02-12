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
				if($_SESSION['rule']=="Student")
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

	public function insert()
	{
		$studentid = 'studentid';
		$studentname = 'studentname';
		$year = 'year';
		$term = 'term';
		$courseID = 'courseID';
		$courseName = 'courseName';
		$grade = 'grade';
		$this->load->model('UserModel');
		$result = $this->UserModel->insert($studentid,$studentname,$year,$courseID,$courseName,$term,$grade);
	}	
	// $studentid,$studentname,$year,$courseID,$courseName,$term,$grade
	public function delete($historyid)
	{
		$historyid = 'historyid';
		$this->load->model('historygrade');
		$result = $this->UserModel->delete($historyid);
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
		
	}

}