<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Stellplatzart
 * Welche Stellplatzarten sind vorhanden, Optionen kombinierbar, als einfache Alternative zu den stp...Elementen
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("stellplatzart") 
 */
class Stellplatzart {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("CARPORT") 
	 * @var boolean
	 */
	protected $carport;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("DUPLEX") 
	 * @var boolean
	 */
	protected $duplex;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("FREIPLATZ") 
	 * @var boolean
	 */
	protected $freiplatz;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("GARAGE") 
	 * @var boolean
	 */
	protected $garage;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("PARKHAUS") 
	 * @var boolean
	 */
	protected $parkhaus;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("TIEFGARAGE") 
	 * @var boolean
	 */
	protected $tiefgarage;

	/**
	 * @return boolean
	 */
	public function getCarport() {
		return $this->carport;
	}

	/**
	 * @return boolean
	 */
	public function getDuplex() {
		return $this->duplex;
	}

	/**
	 * @return boolean
	 */
	public function getFreiplatz() {
		return $this->freiplatz;
	}

	/**
	 * @return boolean
	 */
	public function getGarage() {
		return $this->garage;
	}

	/**
	 * @return boolean
	 */
	public function getParkhaus() {
		return $this->parkhaus;
	}

	/**
	 * @return boolean
	 */
	public function getTiefgarage() {
		return $this->tiefgarage;
	}

	/**
	 * @param boolean $carport Setter for carport
	 * @return Stellplatzart
	 */
	public function setCarport($carport) {
		$this->carport = $carport;
		return $this;
	}

	/**
	 * @param boolean $duplex Setter for duplex
	 * @return Stellplatzart
	 */
	public function setDuplex($duplex) {
		$this->duplex = $duplex;
		return $this;
	}

	/**
	 * @param boolean $freiplatz Setter for freiplatz
	 * @return Stellplatzart
	 */
	public function setFreiplatz($freiplatz) {
		$this->freiplatz = $freiplatz;
		return $this;
	}

	/**
	 * @param boolean $garage Setter for garage
	 * @return Stellplatzart
	 */
	public function setGarage($garage) {
		$this->garage = $garage;
		return $this;
	}

	/**
	 * @param boolean $parkhaus Setter for parkhaus
	 * @return Stellplatzart
	 */
	public function setParkhaus($parkhaus) {
		$this->parkhaus = $parkhaus;
		return $this;
	}

	/**
	 * @param boolean $tiefgarage Setter for tiefgarage
	 * @return Stellplatzart
	 */
	public function setTiefgarage($tiefgarage) {
		$this->tiefgarage = $tiefgarage;
		return $this;
	}
}
