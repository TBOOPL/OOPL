<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="transaction")
 */
class Transaction
{
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id_pesan;

    /**
     * @Column(type="integer", nullable=false)
     */
    protected $harga;

    /**
	 * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="username", referencedColumnName="username", nullable=false)
     */
    protected $username;
	
    /**
	 * @OneToOne(targetEntity="Seat")
     * @JoinColumn(name="id_seat", referencedColumnName="id_seat", nullable=false)
	 */
    protected $id_seat;
	
    /**
	 * @ManyToOne(targetEntity="tayang")
     * @JoinColumn(name="id_having", referencedColumnName="id_tayang", nullable=false)
     */
    protected $id_tayang;
		
	public function setHarga()
	{
		$this->harga=35000;
	}
	
	public function setUsername($user)
	{
		$this->username=$user;
	}
	
	public function setSeat($s)
	{
		$this->id_seat=$s;
	}
	
	public function setTayang($t)
	{
		$this->id_tayang=$t;
	}
	
	public function getId()
	{
		return $this->id_pesan;
	}
	
	public function getIdSeat()
	{
		return $this->id_seat->getId();
	}
}