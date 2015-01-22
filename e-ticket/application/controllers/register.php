<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {

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
	 private $vUsername='';
	 private $vNama='';
	 private $vEmail='';
	 private $vPassword1='';
	 private $vPassword2='';
	 function __construct()
	 {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		///
		//$this->load->model('User');
		$this->load->library('doctrine');
        $this->em = $this->doctrine->em;
		///
		$this->load->library('session');
		
	}

	public function index()
	{
		$this->load->view('login_view');
		$this->vUsername=$this->input->post('register_username','true');
		$this->vPassword1=$this->input->post('password1','true');
		$this->vNama=$this->input->post('register_nama','true');
		$this->vPassword2=$this->input->post('password2','true');
		$this->vEmail=$this->input->post('email','true');
		
		if($this->cekPassword()){
			$this->insertData();
		}
		
	}
	private function cekPassword(){
		if($this->vPassword1==$this->vPassword2){
			return true;
		}else{
			return false;
		}
	}
	private function insertData(){
		$user = new Entity\User;
		$user->setUsername($this->vUsername);
		$user->setPassword($this->vPassword1);
		$user->setNama($this->vNama);
		$user->setEmail($this->vEmail);
		$this->em->persist($user);
		$this->em->flush();
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */