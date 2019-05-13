<?php

namespace SilexApi;

use Doctrine\DBAL\Connection;

class ClientDao
{
	private $db;

	public function __construct(Connection $db)
	{
		$this->db = $db;
	}

	protected function getDb()
	{
		return $this->db;
	}

	public function findAll()
	{
		$sql = "SELECT * FROM client";
		$result = $this->getDb()->fetchAll($sql);

		$entities = array();
		foreach ( $result as $row ) {
			$id = $row['id'];
			$entities[$id] = $this->buildDomainObjects($row);
		}

		return $entities;
	}

	public function find($id)
	{
		$sql = "SELECT * FROM client WHERE id=?";
		$row = $this->getDb()->fetchAssoc($sql, array($id));

		if ($row) {
			return $this->buildDomainObjects($row);
		} else {
			throw new \Exception("No user matching id ".$id);
		}
	}

	public function save(Client $client)
	{
		$clientData = array(
			'last_name' => $client->getLastname(),
			'first_name' => $client->getFirstname(),
			'adress' => $client->getAdress(),
			'city' => $client->getCity(),
			'zip_code' => $client->getZipcode(),
			'phone' => $client->getPhone(),
			'mobile_phone' => $client->getMobilephone(),
			'deleted' => $client->getDeleted()
		);

		// TODO CHECK
		if ($client->getId()) {
			$clientData['updated_at'] = date("Y-m-d H:i:s");
			$this->getDb()->update('client', $clientData, array('id' => $client->getId()));
		} else {
			$clientData['created_at'] = date("Y-m-d H:i:s");
			$this->getDb()->insert('client', $clientData);
			$id = $this->getDb()->lastInsertId();
			$client->setId($id);
		}
	}

	public function delete($id)
	{
		$data = array('deleted' => 1, 'deleted_at' => date("Y-m-d H:i:s"));
		$this->getDb()->update('client', $data, array('id' => $id));
	}

	protected function buildDomainObjects($row)
	{
		$client = new Client();
		$client->setId($row['id']);
		$client->setFirstname($row['first_name']);
		$client->setLastname($row['last_name']);
		$client->setAdress($row['adress']);
		$client->setCity($row['city']);
		$client->setZipcode($row['zip_code']);
		$client->setPhone($row['phone']);
		$client->setMobilephone($row['mobile_phone']);
		$client->setDeleted($row['deleted']);
		
		return $client;
	}
}