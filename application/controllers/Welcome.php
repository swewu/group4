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
		$this->load->view('welcome_message');
	}
	
	public function getReGrade($username){
		$this->load->model('UserModel');
		$result = $this->UserModel->getregrade($username);
		$data = [
			'result' => $result
		];
		$this->load->view("index",$data);
	}
	// public function login($username,$password){
	// 	$this->load->model('UserModel');
	// 	$result = $this->UserModel->login($username,$password);
	// 	if($result){
		
	// 	}

	// }

}
