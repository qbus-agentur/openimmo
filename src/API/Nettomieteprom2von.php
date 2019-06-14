<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Nettomieteprom2von
 * Angaben bei Gewerbe Miete, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("nettomieteprom2von") 
 */
class Nettomieteprom2von {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $nettomieteprom2bis;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $nettomieteprom2bis Shortcut setter for nettomieteprom2bis
	 * @param float $value the actual value
	 */
	public function __construct($nettomieteprom2bis = null, $value = null) {
		$this->nettomieteprom2bis = $nettomieteprom2bis;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getNettomieteprom2bis() {
		return $this->nettomieteprom2bis;
	}

	/**
	 * @return float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float $nettomieteprom2bis Setter for nettomieteprom2bis
	 * @return Nettomieteprom2von
	 */
	public function setNettomieteprom2bis($nettomieteprom2bis) {
		$this->nettomieteprom2bis = $nettomieteprom2bis;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Nettomieteprom2von
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
