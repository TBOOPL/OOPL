<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Tayang")
 */
class Tayang
{

    /**
	 * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id_tayang;

    /**
     * @Column(type="datetime", nullable=false)
     */
    protected $schedule;

	/**
	 * @ManyToOne(targetEntity="Film")
     * @JoinColumn(name="id_film", referencedColumnName="id_film", nullable=false)
     */
    protected $id_film;
	
	/**
	 * @ManyToOne(targetEntity="Studio")
     * @JoinColumn(name="nama_studio", referencedColumnName="nama_studio", nullable=false)
     */
    protected $nama_studio;
	
	/**
     * @OneToMany(targetEntity="Transaction", mappedBy="id_having")
     */
    protected $transactions;
	
	public function getSchedule()
	{
		return $this->schedule->format('Y-m-d H:i:s');
	}
	
	public function getId()
	{
		return $this->id_tayang;
	}
	
	public function getNamaStudio()
	{
		return $this->nama_studio->getNamaStudio();
	}
	
	public function getFilm()
	{
		return $this->id_film->getTitle();
	}
	
	public function getIdFilm()
	{
		return $this->id_film->getId();
	}
	
	public function getTayangOrder($id){
		$date = date('Y-m-d',strtotime(str_replace('-', '/', date('Y-m-d')) . "+3 days"));
		return "SELECT u FROM Entity\Tayang u WHERE u.id_film =".$id." and '".date('Y-m-d')."' <= u.schedule and  u.schedule <= '".$date."'";
	}
}