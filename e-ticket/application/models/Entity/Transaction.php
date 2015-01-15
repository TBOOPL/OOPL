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
}