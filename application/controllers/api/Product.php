<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');
require APPPATH . 'libraries/Format.php';

class Product extends MY_Controller
{
	use REST_Controller {
		REST_Controller::__construct as private __resTraitConstruct;
	}
    
	public function __construct() {
		
		parent::__construct();
		$this->__resTraitConstruct();
		$this->post = $_REQUEST;
		
		
		$this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
		$this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
		$this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
	
		$this->post = $_REQUEST;
	
			
	} 
	
	public function list_get()
	{

		$response = array(
			'status' => true,
			'message' => 'Success.',
			'data' => array(
				array(
					'id' => '1',
					'name' => 'Product 1',
				),
				array(
					'id' => '2',
					'name' => 'Product 2',
				),
			)
		);
		
	
		$this->set_response($response, 200); 
	}
		
}	   