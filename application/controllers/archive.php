<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array('students_model'));
	}
	
	public function archive()
	{
		$stud_id = NULL;
		$archive = NULL;
		
		if($archive)
		{
			$this->students_model->archive($stud_id);
		}
		
		$data['fields'] = array (
			'id',
			'fname',
			'mname',
			'lname',
			'bday',
			'address',
			'contact',
			'pog'
		);
	$data['conditions'] = array(
		 'del_flag' => 0,
		);
		
		$data['order'] = 'date_created';
		$data['results'] = $this->students_model->get_students($data);
		
		$this->load->view('index2');
}
		
}
