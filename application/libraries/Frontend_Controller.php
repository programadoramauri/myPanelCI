<?php
class Frontend_Controller extends MY_Controller{
	public function __construct(){
		parent::__construct();
		var_dump('Wellcome from my frontend controller');
	}

}