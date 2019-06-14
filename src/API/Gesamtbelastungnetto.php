<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtbelastungnetto
 * Die Summe alle Nebenkosten und Mietzinse bei Miete, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("gesamtbelastungnetto") 
 */
class Gesamtbelastungnetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $gesamtbelastungust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $gesamtbelastungust Shortcut setter for gesamtbelastungust
	 * @param float $value the actual value
	 */
	public function __construct($gesamtbelastungust = null, $value = null) {
		$this->gesamtbelastungust = $gesamtbelastungust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getGesamtbelastungust() {
		return $this->gesamtbelastungust;
	}

	/**
	 * @return float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float $gesamtbelastungust Setter for gesamtbelastungust
	 * @return Gesamtbelastungnetto
	 */
	public function setGesamtbelastungust($gesamtbelastungust) {
		$this->gesamtbelastungust = $gesamtbelastungust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Gesamtbelastungnetto
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
