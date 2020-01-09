<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

	public function add_insert($arrEmp){
		// print_r($arrEmp);
		// exit();
		$db_insert = $this->db->insert('orders',$arrEmp);

		if($this->db->affected_rows()){
			return true;
		}else{
			return false;
		}
	}

}

/* End of file Auth_Model.php */
/* Location: ./application/models/Auth_Model.php */