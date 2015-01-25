<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

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
	}
	public function verifikasi_login()
	{
		$vUsername=$this->input->post('username','true');
		$vPassword=md5($this->input->post('password','true'));
		$userRepository=$this->em->getRepository('Entity\User');
		$singleUser=$userRepository->findOneBy(array('username'=>$vUsername,'password'=>$vPassword));
		if($singleUser!=null){
			$array_items = array(
				'username' => $singleUser->getUsername(),
				'logged_in' => true
			);
			$this->session->set_userdata($array_items);
			redirect(site_url('home'));
		}
		else {
			// kalau ga ada diredirect lagi ke halaman login
			$this->session->set_flashdata('notification', 'Invalid Username and/or Password!');
			$this->index();
		}
	}
}