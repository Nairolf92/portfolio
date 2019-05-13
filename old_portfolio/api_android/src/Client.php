<?php

namespace SilexApi;
//àfaire
class Client
{
	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $last_name;

	/**
	 * @var string
	 */
	private $first_name;

	/**
	 * @var string
	 */
	private $adress;

	/**
	 * @var string
	 */
	private $city;

	/**
	 * @var string
	 */
	private $zipcode;

	/**
	 * @var integer
	 */
	private $phone;

	/**
	 * @var integer
	 */
	private $mobile_phone;

	/**
	 * @var boolean
	 */
	private $deleted;



	
	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getFirstname() {
		return $this->first_name;
	}

	/**
	 * @param string $firstname
	 */
	public function setFirstname( $first_name ) {
		$this->first_name = $first_name;
	}

	/**
	 * @return string
	 */
	public function getLastname() {
		return $this->last_name;
	}

	/**
	 * @param string $lastname
	 */
	public function setLastname( $last_name ) {
		$this->last_name = $last_name;
	}

	/**
	 * @return string
	 */
	public function getAdress() {
		return $this->adress;
	}

	/**
	 * @param string $adress
	 */
	public function setAdress( $adress ) {
		$this->adress = $adress;
	}

	/**
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * @param string $city
	 */
	public function setCity( $city ) {
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getZipcode() {
		return $this->zipcode;
	}

	/**
	 * @param string $zipcode
	 */
	public function setZipcode( $zipcode ) {
		$this->zipcode = $zipcode;
	}

	/**
	 * @return integer
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * @param integer $phone
	 */
	public function setPhone( $phone ) {
		$this->phone = $phone;
	}

	/**
	 * @return integer
	 */
	public function getMobilephone() {
		return $this->mobile_phone;
	}

	/**
	 * @param integer $mobile_phone
	 */
	public function setMobilephone( $mobile_phone ) {
		$this->mobile_phone = $mobile_phone;
	}

	/**
	 * @return boolean
	 */
	public function getDeleted() {
		return $this->deleted;
	}

	/**
	 * @param boolean $deleted
	 */
	public function setDeleted( $deleted ) {
		$this->deleted = $deleted;
	}
}