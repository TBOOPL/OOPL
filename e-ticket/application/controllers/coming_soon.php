<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class coming_soon extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('form_validation');
		///
		///
		$this->load->library('doctrine');
        $this->em = $this->doctrine->em;
	}
	
	public function coming(){
		$f = new Entity\Film;
		$data['soon'] = $this->em->createQuery($f->getSoon())->getResult();
		$this->load->view('coming_soon',$data);
	}
	
	public function index()
	{
		$this->coming();
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */