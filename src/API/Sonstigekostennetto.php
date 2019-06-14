<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Sonstigekostennetto
 * Anganen bei Miet-Objekten, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("sonstigekostennetto") 
 */
class Sonstigekostennetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $sonstigekostenust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $sonstigekostenust Shortcut setter for sonstigekostenust
	 * @param float $value the actual value
	 */
	public function __construct($sonstigekostenust = null, $value = null) {
		$this->sonstigekostenust = $sonstigekostenust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getSonstigekostenust() {
		return $this->sonstigekostenust;
	}

	/**
	 * @return float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float $sonstigekostenust Setter for sonstigekostenust
	 * @return Sonstigekostennetto
	 */
	public function setSonstigekostenust($sonstigekostenust) {
		$this->sonstigekostenust = $sonstigekostenust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Sonstigekostennetto
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
