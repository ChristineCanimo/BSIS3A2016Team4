<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array('students_model'));
	}
	public function index()
	{
		$stud_id = NULL;
		$stud_username = NULL;
		$stud_fname = NULL;
		$stud_mname = NULL;
		$stud_lname = NULL;
		$stud_pass = NULL;
		$stud_bday = NULL;
		$stud_address = NULL;
		$stud_contact = NULL;
		$stud_pog = NULL;
		$submit = NULL;
		
		extract($_POST);
		
		$zxc['stud_id'] = $stud_id;
		$zxc['stud_username'] = $stud_username;
		$zxc['stud_fname'] = $stud_fname;
		$zxc['stud_lname'] = $stud_lname;
		$zxc['stud_mname'] = $stud_mname;
		$zxc['stud_pass'] = $stud_pass;
		$zxc['stud_bday'] = $stud_bday;
		$zxc['stud_address'] = $stud_address;
		$zxc['stud_contact'] = $stud_contact;
		$zxc['stud_pog'] = $stud_pog;
		
		
		if($this->form_validation->run() != FALSE)
		{
			$this->students_model->update($zxc);
		}
		
		$this->load->view('index');
		
	}
}
