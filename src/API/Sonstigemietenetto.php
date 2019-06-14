<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstigemietenetto
 * Ergänzenden Mietkosten, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("sonstigemietenetto") 
 */
class Sonstigemietenetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $sonstigemieteust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $sonstigemieteust Shortcut setter for sonstigemieteust
	 * @param float $value the actual value
	 */
	public function __construct($sonstigemieteust = null, $value = null) {
		$this->sonstigemieteust = $sonstigemieteust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getSonstigemieteust() {
		return $this->sonstigemieteust;
	}

	/**
	 * @return float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float $sonstigemieteust Setter for sonstigemieteust
	 * @return Sonstigemietenetto
	 */
	public function setSonstigemieteust($sonstigemieteust) {
		$this->sonstigemieteust = $sonstigemieteust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Sonstigemietenetto
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
