<?php
class MY_Controller extends CI_Controller{

	public $data = array();
	public function __construct(){
		parent::__construct();
		$this->data['errors'] = array();
		$this->data['site_name'] = config_item('site_name');
		$this->load->helper('url');
	}

}