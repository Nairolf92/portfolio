<?php

namespace SilexApi;

use Doctrine\DBAL\Connection;

class 
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
		$sql = "SELECT * FROM commande";
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
		$sql = "SELECT * FROM commande WHERE id=?";
		$row = $this->getDb()->fetchAssoc($sql, array($id));

		if ($row) {
			return $this->buildDomainObjects($row);
		} else {
			throw new \Exception("No user matching id ".$id);
		}
	}

	public function save(Commande $commande)
	{
		$commandeData = array(
			'livreur' => $commande->getLivreur(),
			'client' => $commande->getClient(),
			'prix_total' => $commande->getPrixtotal()
		);

		// TODO CHECK
		if ($commande->getId()) {
			//$commandeData['updated_at'] = date("Y-m-d H:i:s");
			$this->getDb()->update('commande', $commandeData, array('id' => $commande->getId()));
		} else {
			//$commandeData['created_at'] = date("Y-m-d H:i:s");
			$this->getDb()->insert('commande', $commandeData);
			$id = $this->getDb()->lastInsertId();
			$commande->setId($id);
		}
	}

	public function delete($id)
	{
		$data = array('deleted' => 1);
		$this->getDb()->update('commande', $data, array('id' => $id));
	}

	protected function buildDomainObjects($row)
	{
		$commande = new commande();
		$commande->setId($row['id']);
		$commande->setLivreur($row['livreur']);
		$commande->setClient($row['client']);
		$commande->setPrixtotal($row['prix_total']);
		
		return $commande;
	}
}