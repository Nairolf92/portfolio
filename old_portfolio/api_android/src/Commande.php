<?php

namespace SilexApi;
//àfaire
class Commande
{
	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $livreur;
	/**
	 * @var string
	 */
	private $client;

	/**
	 * @var float
	 */
	private $prix_total;

	
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
	 * @return int
	 */
	public function getLivreur() {
		return $this->livreur;
	}

	/**
	 * @param int $livreur
	 */
	public function setLivreur( $livreur ) {
		$this->livreur = $livreur;
	}

	/**
	 * @return int
	 */
	public function getClient() {
		return $this->client;
	}

	/**
	 * @param string $client
	 */
	public function setClient( $client ) {
		$this->client = $client;
	}

	/**
	 * @return float
	 */
	public function getPrixtotal() {
		return $this->prix_total;
	}

	/**
	 * @param string $adress
	 */
	public function setPrixtotal( $prix_total ) {
		$this->prix_total = $prix_total;
	}
}