<?php

namespace SilexApi;

class User
{
	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $login;

	/**
	 * @var string
	 */
	private $password;

	/**
	 * @var string
	 */
	private $first_name;

	/**
	 * @var string
	 */
	private $last_name;

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
	private $zip_code;

	/**
	 * @var string
	 */
	private $phone;

	/**
	 * @var string
	 */
	private $mobile_phone;

	/**
	 * @var string
	 */
	private $id_role;

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
	public function getLogin() {
		return $this->login;
	}

	/**
	 * @param string $login
	 */
	public function setLogin( $login ) {
		$this->login = $login;
	}

	/**
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @param string $password
	 */
	public function setPassword( $password ) {
		$this->password = $password;
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
		return $this->zip_code;
	}

	/**
	 * @param string $zipcode
	 */
	public function setZipcode( $zip_code ) {
		$this->zip_code = $zip_code;
	}

	/**
	 * @return string
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * @param string $zipcode
	 */
	public function setPhone( $phone ) {
		$this->phone = $phone;
	}

	/**
	 * @return string
	 */
	public function getMobilephone() {
		return $this->mobile_phone;
	}

	/**
	 * @param string $zipcode
	 */
	public function setMobilephone( $mobile_phone ) {
		$this->mobile_phone = $mobile_phone;
	}

	/**
	 * @return boolean
	 */
	public function getIdrole() {
		return $this->id_role;
	}

	/**
	 * @param boolean $id_role
	 */
	public function setIdrole( $id_role ) {
		$this->id_role = $id_role;
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