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
     * @OneToMany(targetEntity="tayang", mappedBy="id_film")
     */
    protected $havings;
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getImg()
	{
		return $this->image;
	}
	
	public function getId()
	{
		return $this->id_film;
	}
	
	public function getDesc()
	{
		return $this->synopsis;
	}
	
	public function getSynopsis()
	{
		return $this->synopsis;
	}
}