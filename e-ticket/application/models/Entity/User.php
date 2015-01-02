<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="user")
 */
class User
{

    /**
	 * @Id
     * @Column(type="string", length=32, unique=true, nullable=false)
     */
    protected $username;

    /**
     * @Column(type="string", length=255, nullable=false)
     */
    protected $password;

    /**
     * @Column(type="string", length=255, nullable=false)
     */
    protected $nama;
	
	/**
     * @Column(type="string", length=255, nullable=false)
     */
    protected $email;
	
	/**
     * @OneToMany(targetEntity="Transaction", mappedBy="username")
     */
    protected $transactions;
	
	public function setUsername($username)
	{
		$this->username = $username;
	}
	
	public function setPassword($password)
	{
		$this->password = $password;
	}
	
	public function setNama($nama)
	{
		$this->nama = $nama;
	}
	
	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getUsername()
	{
		return $this->username;
	}
}