<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Heizkostennetto
 * Die Heizkosten einer Einheit als Nettowert. Die Umsatzsteuer optional im Attribut
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("heizkostennetto") 
 */
class Heizkostennetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $heizkostenust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $heizkostenust Shortcut setter for heizkostenust
	 * @param float $value the actual value
	 */
	public function __construct($heizkostenust = null, $value = null) {
		$this->heizkostenust = $heizkostenust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getHeizkostenust() {
		return $this->heizkostenust;
	}

	/**
	 * @return float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float $heizkostenust Setter for heizkostenust
	 * @return Heizkostennetto
	 */
	public function setHeizkostenust($heizkostenust) {
		$this->heizkostenust = $heizkostenust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Heizkostennetto
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
