<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subject extends CI_Controller 
{

	public function add()
	{
		$this->load->view('AddSubject');
	}
}
