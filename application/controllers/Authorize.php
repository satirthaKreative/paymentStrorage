<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorize extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('myauthorize');

		$this->load->model('Auth_model');
	}

	public function index()
	{
		$this->load->view('authorize');
	}

	public function pushPayment()
	{
		$fullname = $this->input->post('fullname');
		$cNumber=$this->input->post('card_number');
		$cexpireDateM=$this->input->post('card_exp_month');
		$cexpireDateY=$this->input->post('card_exp_year');
		$cvvNumber=$this->input->post('card_cvc');
		$cusAddress=$this->input->post('cAddress');
		$emailAddress=$this->input->post('email');
		$cdesc= "2  hours";
		$amount = 20;
		$createUsers = array("fullName"=>$this->input->post('fullname'),
							 "cNumber"=>$this->input->post('card_number'),
							 "cexpireDateM"=>$this->input->post('card_exp_month'),
							 "cexpireDateY"=>$this->input->post('card_exp_year'),
							 "cvvNumber"=>$this->input->post('card_cvc'),
							 "cusAddress"=>$this->input->post('cAddress'),
							 "emailAddress"=>$this->input->post('email'),
							 "cdesc" => "2  hours",
							 "amount" => 20,
							);
		

		$result = $this->myauthorize->chargerCreditCard($createUsers);
		if($result!= false){
			$arrEmp = [
				'name'=>$fullname,
				'email'=>$emailAddress,
				'item_name'=>$cdesc,
				'item_price'=>$amount,
				'item_price_currency'=>'USD',
				'card_number'=>$cNumber,
				'card_exp_month'=>$cexpireDateM,
				'card_exp_year'=>$cexpireDateY,
				'paid_amount'=>$amount
			];
			
		if($this->Auth_model->add_insert($arrEmp)){
			echo "sucess";
		}else{
			echo "Error";
		}
		}else{
			echo "do";
		}
	}


}

/* End of file Authorize.php */
/* Location: ./application/controllers/Authorize.php */