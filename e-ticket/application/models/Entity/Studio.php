<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Studio")
 */
class Studio
{

    /**
	 * @Id
     * @Column(type="string", length=32, nullable=false)
     */
    protected $nama_studio;

    /**
     * @Column(type="string", length=255, nullable=false)
     */
    protected $jenis;
	
	/**
     * @OneToMany(targetEntity="seat", mappedBy="nama_studio")
     */
    protected $seats;
	
	/**
     * @OneToMany(targetEntity="Having", mappedBy="nama_studio")
     */
    protected $havings;
}