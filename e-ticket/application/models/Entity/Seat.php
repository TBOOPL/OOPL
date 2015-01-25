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
     * @Column(type="string", length=10, nullable=false)
     */
    protected $no_kursi;

    /**
	 * @ManyToOne(targetEntity="studio")
     * @JoinColumn(name="nama_studio", referencedColumnName="nama_studio", nullable=false)
     */
    protected $nama_studio;
	public function getId()
	{
		return $this->id_seat;
	}
	
	public function getNoKursi()
	{
		return $this->no_kursi;
	}
}