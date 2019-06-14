<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Summemietenetto
 * Gesamtsumme der Mietkosten, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("summemietenetto") 
 */
class Summemietenetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $summemieteust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $summemieteust Shortcut setter for summemieteust
	 * @param float $value the actual value
	 */
	public function __construct($summemieteust = null, $value = null) {
		$this->summemieteust = $summemieteust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getSummemieteust() {
		return $this->summemieteust;
	}

	/**
	 * @return float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float $summemieteust Setter for summemieteust
	 * @return Summemietenetto
	 */
	public function setSummemieteust($summemieteust) {
		$this->summemieteust = $summemieteust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Summemietenetto
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
