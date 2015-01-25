<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Playing extends CI_Controller {
	
	 function __construct()
	 {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('doctrine');
        $this->em = $this->doctrine->em;
		
	}

	public function playing(){
		$f= new Entity\Film;
		$data['playing'] = $this->em->createQuery($f->getPlaying())->getResult();
		$this->load->view('now_playing',$data);
	}
	
	public function index()
	{
		$this->playing();
	}
	
}