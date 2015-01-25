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
		return $this->schedule;
	}
}