<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {

	 private $vUsername='';
	 private $vNama='';
	 private $vEmail='';
	 private $vPassword1='';
	 private $vPassword2='';
	 private $status = array("STATUS"=>"");
	 function __construct()
	 {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('doctrine');
        $this->em = $this->doctrine->em;
		$this->load->library('session');
		
	}

	public function index()
	{
		$this->load->view('login_view');
		$this->form_validation->set_rules('register_username','Nama','required');
		$this->form_validation->set_rules('password2','Confirm Password','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		
		
		$this->vUsername=$this->input->post('register_username','true');
		$this->vPassword1=$this->input->post('password1','true');
		$this->vNama=$this->input->post('register_nama','true');
		$this->vPassword2=$this->input->post('password2','true');
		$this->vEmail=$this->input->post('email','true');
		
		if($this->form_validation->run()){
			if($this->cekUsername()){
				if($this->cekPassword()){
					$this->insertData();
					redirect(site_url('home'));
				}
			}
		}
		
		
	}
	private function cekEmail(){
		if($this->form_validation->valid_email($this->vEmail)){
			return true;
		}else{
			$this->status = array("STATUS"=>"Email Tidak Sama");
			json_encode ($this->status) ;
			return false;
		}
	}
	private function cekPassword(){
		if($this->vPassword1==$this->vPassword2){
			return true;
		}else{
			$this->status = array("STATUS"=>"Password Tidak Sama");
			json_encode ($this->status) ;
			return false;
			
		}
	}
	private function insertData(){
		$user = new Entity\User;
		$user->setUsername($this->vUsername);
		$user->setPassword(md5($this->vPassword1));
		$user->setNama($this->vNama);
		$user->setEmail($this->vEmail);
		$this->em->persist($user);
		$this->em->flush();
		
	}
	private function cekUsername(){
		$userRepository=$this->em->getRepository('Entity\User');
		$singleUser=$userRepository->findOneBy(array('username'=>$this->vUsername));
		if($singleUser!=null){
			return false;
		}else{
			$this->status = array("STATUS"=>"Username Sudah Ada");
			json_encode ($this->status) ;	
			return true;
		}
	}
	
}