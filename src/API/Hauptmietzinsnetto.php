<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Hauptmietzinsnetto
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("hauptmietzinsnetto") 
 */
class Hauptmietzinsnetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $hauptmietzinsust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $hauptmietzinsust Shortcut setter for hauptmietzinsust
	 * @param float $value the actual value
	 */
	public function __construct($hauptmietzinsust = null, $value = null) {
		$this->hauptmietzinsust = $hauptmietzinsust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getHauptmietzinsust() {
		return $this->hauptmietzinsust;
	}

	/**
	 * @return float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float $hauptmietzinsust Setter for hauptmietzinsust
	 * @return Hauptmietzinsnetto
	 */
	public function setHauptmietzinsust($hauptmietzinsust) {
		$this->hauptmietzinsust = $hauptmietzinsust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Hauptmietzinsnetto
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
