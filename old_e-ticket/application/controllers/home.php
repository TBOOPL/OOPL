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

	public function showMovies(){
		$movieRepository=$this->em->getRepository('Entity\Film');
		$data['allMovies']= $movieRepository->findby(array(), array('id_film' => 'ASC'),3);
		$this->load->view('home',$data);
	}

	public function index()
	{
		$this->showMovies();
		
		/*TUTORIAL*/
		/*insert
		$user = new Entity\User;
		$user->setUsername('Joseph');
		$user->setPassword('secretPassw0rd');
		$user->setNama('yoga');
		$user->setEmail('josephatwildlyinaccuratedotcom');
		$this->em->persist($user);
		$this->em->flush();
		echo "insert berhasil";
		
		//findall (return array)
		$userRepository=$this->em->getRepository('Entity\User');
		$allUser=$userRepository->findAll();
		foreach($allUser as $i)
		{
		echo $i->getUsername(). ' find all <br>';	
		} 
		
		//findby (return array)
		$userRepository=$this->em->getRepository('Entity\User');
		$singleUser=$userRepository->findByUsername('Joseph');//findBy(array('username'=>'Joseph'));
		foreach($singleUser as $i)
		{
		echo $i->getUsername().' find by <br>';	
		} 
		
		//find (return object)
		$singleUser=$this->em->find('Entity\User','Joseph');//findBy(array('username'=>'Joseph'));
		if(!empty($singleUser) && !is_null($singleUser)){
			echo $singleUser->getUsername().' find <br>';	
		}else
		{
			echo "tidak ada di database<br>";
		}
		
		
		//orderby 
		$userRepository=$this->em->getRepository('Entity\User');
		$singleUser=$userRepository->findBy(array(),array("nama"=>"DESC"));//findBy(array('username'=>'Joseph'));
		foreach($singleUser as $i)
		{
		echo $i->getUsername().' ORDER by <br>';	
		} 

		//limit offset
		$userRepository=$this->em->getRepository('Entity\User');
		$singleUser=$userRepository->findBy(array(),array("nama"=>"DESC"),5,0);//findBy(array('username'=>'Joseph'));
		foreach($singleUser as $i)
		{
		echo $i->getUsername().' limit offset <br>';	
		} 		
		
		//update
		$singleUser=$this->em->find('Entity\User','Joseph');
		if(!empty($singleUser) && !is_null($singleUser)){
			$singleUser->setUsername('hihihi');
			$this->em->flush();
			echo "updated <br>";
		}else
		{
			echo "not updated";
		}
		
		//delete
		$singleUser=$this->em->find('Entity\User','hihihi');
		if(!empty($singleUser) && !is_null($singleUser)){
			$this->em->remove($singleUser);
			$this->em->flush();
			echo "deleted <br>";
		}else
		{
			echo "not deleted";
		}
		
		//$this->load->view('home');*/
		/*END OF TUTORIAL*/
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */