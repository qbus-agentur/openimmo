<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Serviceleistungen
 * Welche Serviceleistungen werden angeboten? Optionen kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("serviceleistungen") 
 */
class Serviceleistungen {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("BETREUTES_WOHNEN") 
	 * @var boolean
	 */
	protected $betreutesWohnen;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("CATERING") 
	 * @var boolean
	 */
	protected $catering;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("EINKAUF") 
	 * @var boolean
	 */
	protected $einkauf;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("REINIGUNG") 
	 * @var boolean
	 */
	protected $reinigung;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("WACHDIENST") 
	 * @var boolean
	 */
	protected $wachdienst;

	/**
	 * @return boolean
	 */
	public function getBetreutesWohnen() {
		return $this->betreutesWohnen;
	}

	/**
	 * @return boolean
	 */
	public function getCatering() {
		return $this->catering;
	}

	/**
	 * @return boolean
	 */
	public function getEinkauf() {
		return $this->einkauf;
	}

	/**
	 * @return boolean
	 */
	public function getReinigung() {
		return $this->reinigung;
	}

	/**
	 * @return boolean
	 */
	public function getWachdienst() {
		return $this->wachdienst;
	}

	/**
	 * @param boolean $betreutesWohnen Setter for betreutesWohnen
	 * @return Serviceleistungen
	 */
	public function setBetreutesWohnen($betreutesWohnen) {
		$this->betreutesWohnen = $betreutesWohnen;
		return $this;
	}

	/**
	 * @param boolean $catering Setter for catering
	 * @return Serviceleistungen
	 */
	public function setCatering($catering) {
		$this->catering = $catering;
		return $this;
	}

	/**
	 * @param boolean $einkauf Setter for einkauf
	 * @return Serviceleistungen
	 */
	public function setEinkauf($einkauf) {
		$this->einkauf = $einkauf;
		return $this;
	}

	/**
	 * @param boolean $reinigung Setter for reinigung
	 * @return Serviceleistungen
	 */
	public function setReinigung($reinigung) {
		$this->reinigung = $reinigung;
		return $this;
	}

	/**
	 * @param boolean $wachdienst Setter for wachdienst
	 * @return Serviceleistungen
	 */
	public function setWachdienst($wachdienst) {
		$this->wachdienst = $wachdienst;
		return $this;
	}
}
