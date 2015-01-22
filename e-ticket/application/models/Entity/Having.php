<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Having")
 */
class Having
{

    /**
	 * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id_having;

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
}