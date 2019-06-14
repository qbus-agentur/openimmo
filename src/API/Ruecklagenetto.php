<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ruecklagenetto
 * Vorhanden Rücklagen bei einem Kauf Objekt, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("ruecklagenetto") 
 */
class Ruecklagenetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $ruecklageust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $ruecklageust Shortcut setter for ruecklageust
	 * @param float $value the actual value
	 */
	public function __construct($ruecklageust = null, $value = null) {
		$this->ruecklageust = $ruecklageust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getRuecklageust() {
		return $this->ruecklageust;
	}

	/**
	 * @return float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float $ruecklageust Setter for ruecklageust
	 * @return Ruecklagenetto
	 */
	public function setRuecklageust($ruecklageust) {
		$this->ruecklageust = $ruecklageust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Ruecklagenetto
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
