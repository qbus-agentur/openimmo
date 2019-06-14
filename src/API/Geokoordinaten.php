<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Geokoordinaten
 * Geokoordinaten der Immobilie, Pflichtfeld, alternativ mit Ort, PLZ
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("geokoordinaten") 
 */
class Geokoordinaten {

	/**
	 * required
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $breitengrad;

	/**
	 * required
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $laengengrad;

	/**
	 * @return float
	 */
	public function getBreitengrad() {
		return $this->breitengrad;
	}

	/**
	 * @return float
	 */
	public function getLaengengrad() {
		return $this->laengengrad;
	}

	/**
	 * @param float $breitengrad Setter for breitengrad
	 * @return Geokoordinaten
	 */
	public function setBreitengrad($breitengrad) {
		$this->breitengrad = $breitengrad;
		return $this;
	}

	/**
	 * @param float $laengengrad Setter for laengengrad
	 * @return Geokoordinaten
	 */
	public function setLaengengrad($laengengrad) {
		$this->laengengrad = $laengengrad;
		return $this;
	}
}
