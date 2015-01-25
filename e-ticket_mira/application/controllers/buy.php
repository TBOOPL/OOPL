<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class buy extends CI_Controller {
	 function __construct()
	 {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('doctrine');
        $this->em = $this->doctrine->em;
		
	}

	public function index()
	{
	}

	function ticket($id,$isSucces)
	{
		$f= new Entity\Tayang;
		$data['succ']=$isSucces;
		$data['detail']=$this->em->find('Entity\Film',$id);
		$data['tayang'] = $this->em->createQuery($f->getTayangOrder($id))->getResult();
		$this->load->view('buy',$data);
	}
	
	function pickTicket($tayang)
	{
		if($tayang!="pilih"){
		$v_tayang=$this->em->find('Entity\Tayang',$tayang);
		$seatRepository=$this->em->getRepository('Entity\Seat');
		$seat=$seatRepository->findBy(array('nama_studio'=>$v_tayang->getNamaStudio()));
		$transRepository=$this->em->getRepository('Entity\Transaction');
		$trans=$transRepository->findBy(array('id_tayang'=>$tayang));
		$data['seat']=$seat;
		$data['trans']=$trans;
		$data['tayang']=$tayang;
		$this->load->view($v_tayang->getNamaStudio(),$data);
		}
	}
	
	function ordered($tayang,$user)
	{
		$v_tayang=$this->em->find('Entity\Tayang',$tayang);
		$seatRepository=$this->em->getRepository('Entity\Seat');
		$seat=$seatRepository->findBy(array('nama_studio'=>$v_tayang->getNamaStudio()));
		$transRepository=$this->em->getRepository('Entity\Transaction');
		$trans=$transRepository->findBy(array('id_tayang'=>$tayang));
		$j=1;
		foreach($seat as $i)
		{
			if($_POST[$i->getId()]!="null")
			{
				$transRepository=$this->em->getRepository('Entity\Transaction');
				$trans=$transRepository->findBy(array('id_tayang'=>$tayang,'id_seat'=>$i->getId()));
				$ins[$j]=$i->getId();
				$j=$j+1;
				if(!empty($trans))
				{
					redirect(site_url('buy/ticket/'.$v_tayang->getIdFilm()).'/'.'fail');
				}
			}			
		} 
		
		for($k=1;$k<$j;$k++)
		{
			$t= new Entity\Transaction;
			$t->setHarga();
			$singleUser=$this->em->find('Entity\User',$user);
			$t->setUsername($singleUser);
			$singleSeat=$this->em->find('Entity\Seat',$ins[$k]);
			$t->setSeat($singleSeat);
			$singleTayang=$this->em->find('Entity\Tayang',$tayang);
			$t->setTayang($singleTayang);
			$this->em->persist($t);
			$this->em->flush();
		}
		redirect(site_url('buy/ticket/'.$v_tayang->getIdFilm()).'/'.'succ');
	}
}