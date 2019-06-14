<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Kaufpreisnetto
 * Ausgewiesene Kaufpreis Netto, Optional mit Umst im Attribut. Speziell für Gewerbe
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("kaufpreisnetto") 
 */
class Kaufpreisnetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $kaufpreisust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $kaufpreisust Shortcut setter for kaufpreisust
	 * @param float $value the actual value
	 */
	public function __construct($kaufpreisust = null, $value = null) {
		$this->kaufpreisust = $kaufpreisust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getKaufpreisust() {
		return $this->kaufpreisust;
	}

	/**
	 * @return float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float $kaufpreisust Setter for kaufpreisust
	 * @return Kaufpreisnetto
	 */
	public function setKaufpreisust($kaufpreisust) {
		$this->kaufpreisust = $kaufpreisust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Kaufpreisnetto
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
