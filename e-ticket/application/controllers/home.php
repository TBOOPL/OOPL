<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->helper('form');
		$this->load->library('form_validation');
		///
		$this->load->library('doctrine');
        $this->em = $this->doctrine->em;
		///
		
	}

	public function index()
	{
		//insert to database
		/*
		$user = new Entity\User;
		$user->setUsername('Joseph');
		$user->setPassword('secretPassw0rd');
		$user->setNama('yoga');
		$user->setEmail('josephatwildlyinaccuratedotcom');
		$this->em->persist($user);
		$this->em->flush();
		echo "wow";
		*/
		//findall
		$userRepository=$this->em->getRepository('Entity\User');
		$allUser=$userRepository->findAll();
		foreach($allUser as $i)
		{
		echo $i->getUsername(). 'find all'.PHP_EOL;	
		} 
		
		//findby
		$userRepository=$this->em->getRepository('Entity\User');
		$singleUser=$userRepository->findByUsername('Joseph');//findBy(array('username'=>'Joseph'));
		foreach($singleUser as $i)
		{
		echo $i->getUsername().' find by'.PHP_EOL;	
		} 
		
		//$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */