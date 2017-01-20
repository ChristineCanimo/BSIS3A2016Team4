<?php

class Students_model extends CI_Model {
	
	protected $table = 'students';
	public function __construct() {
		parent::__construct();
	}
	
	public function get_students ($zxc)
	{
		$this->db->select($zxc['fields']);
		$this->db->order_by($zxc['order']);
		$query = $this->db->get_where($this->table, $zxc['conditions']);
		
		
		
		return $query->result_array();
		
	}
	
	public function archive ($zxc)
	{
		foreach($zxc as $stud_id)
		{
			$fields = array(
			'del_flag' => 1,
			);
			$conditions =  array(
			'id' => $stud_id,
			);
			
			$this->db->where($conditions);
			$this->db->update($this->table, $fields);
		}
	}
	
	public function update($zxc)
	{
		$fields = array(
		'user_name' => $zxc['stud_username'],
		'fname' => $zxc['stud_fname'],
		'mname' => $zxc['stud_mname'],
		'lname' => $zxc['stud_lname'],
		'password' => $zxc['stud_pass'],
		'bday' => $zxc['stud_bday'],
		'address' => $zxc['stud_address'],
		'contact' => $zxc['stud_contact'],
		'pog' => $zxc['stud_pog'],
		);
		
		$conditions =  array(
		'id' => $zxc['stud_id'],
		'del_flag' => 0
		);
		$query = $this->db->get_where($this->table, $conditions) ;
		$results = $query->result_array();
		if( ! empty($results))
		{
			$fields['date_updated'] = date('Y-m-d H:i:s');
			//process update table
			$this->db->where($conditions);
			$this->db->update($this->table, $fields);
		}
		else
		{
			$fields['date_created'] = date('Y-m-d H:i:s');
			// process add table
			$this->db->insert($this->table, $fields);
			
		}
		
	}
	
	
		
		
	}