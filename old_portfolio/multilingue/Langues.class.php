<?php
error_reporting(E_ALL & ~E_NOTICE);
class Langues {
	// Langue par le code ISO 639 (défaut : français)
	private $_langue = 'fr';
	// Dossier contenant les langues
	private $_dirLangue = '';
	// Objet SimpleXML
	private $_simpleXML = null;
	/*
	Constructeur
	Récupère la langue via le navigateur, sinon charge celle par défaut ou si une langue est spécifiée, on charge celle ci. Permet aussi de spécifier le dossier où ce trouvent les langues
	*/
	public function __construct($dirLangue, $fichier, $langue = false) {
		if(is_dir($dirLangue)) {
			$this->_dirLangue = $dirLangue;
		}
		else {
			$this->_dirLangue = 'langues';
		}
		if($langue) {
			$this->_langue = strtolower($langue);
		}
		else {
			if($lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2))) {
				$this->_langue = $lang;
			}
			else {
				$this->_langue = 'fr';
			}
		}
		
		if(file_exists($this->_dirLangue.'/'.$this->_langue.'/'.$fichier.'.xml')) {
			// Chargement du fichier langue
			$this->loadXmlFile($fichier);
		}
		else {
			die('Fichier XML ('.$this->_dirLangue.'/'.$this->_langue.'/'.$fichier.'.xml) innexistant ! Merci de vérifier que celui ci existe.');
		}
	}
	
	/*
	Charge le fichier XML
	
	@access private
	@param $fichier
	@return void
	*/
	private function loadXmlFile($fichier) {
		$this->_simpleXML = simplexml_load_file($this->_dirLangue.'/'.$this->_langue.'/'.$fichier.'.xml');
	}
	
	/*
	Charge le message à afficher
	
	@access public
	@param $texte
	@return $texte
	*/
	public function show_text($texte) {
		$resultat = $this->_simpleXML->xpath($texte);
		foreach($resultat as $noeud) {
			return $noeud;
		}
	}
}
?>