<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Film")
 */
class Film
{
	
    /**
	 * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id_film;

    /**
     * @Column(type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     * @Column(type="decimal", precision=2, scale=1)
     */
    protected $rating;
	
	/**
     * @Column(type="string", length=3000, nullable=false)
     */
    protected $synopsis;

	/**
     * @Column(type="date", nullable=false)
     */
    protected $start;
	
	/**
     * @Column(type="date", nullable=false)
     */
    protected $end;
	
	/**
     * @Column(type="string", length=255, nullable=false)
     */
    protected $image;
	
	/**
     * @Column(type="string", length=255, nullable=false)
     */
    protected $trailer;
	
	/**
     * @Column(type="string", length=255, nullable=false)
     */
    //protected $description;
	
	/**
     * @OneToMany(targetEntity="tayang", mappedBy="id_film")
     */
    protected $havings;
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getRating()
	{
		return $this->rating;
	}
	
	public function getId()
	{
		return $this->id_film;
	}
	
	public function getImg(){
		return $this->image;
	}
	
	public function getDesc(){
		return $this->synopsis;
	}
	
	public function getPlaying(){
		return "SELECT u FROM Entity\Film u WHERE u.start <= '".date('Y-m-d')."' and u.end >= '".date('Y-m-d')."'";
	}
	
	public function getSoon(){
		return "select u from Entity\Film u where u.start > '".date('Y-m-d')."'";
	}
	public function getTrailer(){
		return $this->trailer;
	}
	
	public function getStart(){ return $this->start;}
	public function getEnd(){ return $this->end;}
	
	public function getStat(){
		return ($this->start <= date('Y-m-d H:i:s')) && ($this->end >= date('Y-m-d H:i:s')); 
	}
}