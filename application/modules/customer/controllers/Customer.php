<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	
}
	