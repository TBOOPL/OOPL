<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class coming_soon extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('doctrine');
        $this->em = $this->doctrine->em;
	}
	
	public function index()
	{
		$f = new Entity\Film;
		$data['soon'] = $this->em->createQuery($f->getSoon())->getResult();
		$this->load->view('coming_soon',$data);
	}
}