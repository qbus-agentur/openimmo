<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizungsart
 * Welche Heizungsarten sind vorhanden, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("heizungsart") 
 */
class Heizungsart {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("ETAGE") 
	 * @var boolean
	 */
	protected $etage;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("FERN") 
	 * @var boolean
	 */
	protected $fern;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("FUSSBODEN") 
	 * @var boolean
	 */
	protected $fussboden;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("OFEN") 
	 * @var boolean
	 */
	protected $ofen;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("ZENTRAL") 
	 * @var boolean
	 */
	protected $zentral;

	/**
	 * @return boolean
	 */
	public function getEtage() {
		return $this->etage;
	}

	/**
	 * @return boolean
	 */
	public function getFern() {
		return $this->fern;
	}

	/**
	 * @return boolean
	 */
	public function getFussboden() {
		return $this->fussboden;
	}

	/**
	 * @return boolean
	 */
	public function getOfen() {
		return $this->ofen;
	}

	/**
	 * @return boolean
	 */
	public function getZentral() {
		return $this->zentral;
	}

	/**
	 * @param boolean $etage Setter for etage
	 * @return Heizungsart
	 */
	public function setEtage($etage) {
		$this->etage = $etage;
		return $this;
	}

	/**
	 * @param boolean $fern Setter for fern
	 * @return Heizungsart
	 */
	public function setFern($fern) {
		$this->fern = $fern;
		return $this;
	}

	/**
	 * @param boolean $fussboden Setter for fussboden
	 * @return Heizungsart
	 */
	public function setFussboden($fussboden) {
		$this->fussboden = $fussboden;
		return $this;
	}

	/**
	 * @param boolean $ofen Setter for ofen
	 * @return Heizungsart
	 */
	public function setOfen($ofen) {
		$this->ofen = $ofen;
		return $this;
	}

	/**
	 * @param boolean $zentral Setter for zentral
	 * @return Heizungsart
	 */
	public function setZentral($zentral) {
		$this->zentral = $zentral;
		return $this;
	}
}
