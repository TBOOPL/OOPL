<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Seat")
 */
class Seat
{

    /**
	 * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id_seat;
	
	/**
     * @Column(type="string", length=10, unique=true, nullable=false)
     */
    protected $no_kursi;

    /**
	 * @ManyToOne(targetEntity="studio")
     * @JoinColumn(name="nama_studio", referencedColumnName="nama_studio", nullable=false)
     */
    protected $nama_studio;

}