<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fancy extends CI_Controller {

	 function __construct()
	 {
		parent::__construct();
		$this->load->helper('url');
		$this->load->view('fancy');
	}

}