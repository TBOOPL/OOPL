<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	 function __construct()
	 {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('doctrine');
		$this->load->library('session');
        $this->em = $this->doctrine->em;
		
	}

	public function index()
	{
		$movieRepository=$this->em->getRepository('Entity\Film');
		$data['allMovies']= $movieRepository->findby(array(), array('start' => 'ASC', ),3);
		$this->load->view('home',$data);
	}	
}