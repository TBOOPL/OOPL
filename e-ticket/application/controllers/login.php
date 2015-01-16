<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

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
		//$this->load->model('User');
		$this->load->library('doctrine');
        $this->em = $this->doctrine->em;
		///
		$this->load->library('session');
		
	}

	public function index()
	{
		$this->load->view('login_view');
	}
	public function verifikasi_login()
	{
		$vUsername=$this->input->post('username','true');
		$vPassword=$this->input->post('password','true');
		echo "salah ".$vUsername;	
		//$this->load->view('home');
		//$user->setUsername($vUsername);
		//$user->setPassword($vPassword);
		$userRepository=$this->em->getRepository('Entity\User');
		$singleUser=$userRepository->findOneBy(array('username'=>$vUsername,'password'=>$vPassword));
		if($singleUser!=null){
			$array_items = array(
				//'username' => $singleUser->getUsername(),
				'logged_in' => true
			);
			$this->session->set_userdata($array_items);
			redirect(site_url('home'));
			//$this->load->view('home');
		}
		else {
			//cecho 'maaf salah';
			// kalau ga ada diredirect lagi ke halaman login
			$this->session->set_flashdata('notification', 'Invalid Username and/or Password!');
			//redirect(site_url('home'));
			$this->index();
		}
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */