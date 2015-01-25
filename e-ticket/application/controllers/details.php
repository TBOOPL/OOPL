<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Details extends CI_Controller {

	 function __construct()
	 {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');

		$this->load->library('doctrine');
        $this->em = $this->doctrine->em;
		
	}

	public function movieDetails($id){
		$data['detail']=$this->em->find('Entity\Film',$id);
		$this->load->view('details',$data);
	}
	
	public function index($id)
	{
		$this->movieDetails($this->id);
	}	
}