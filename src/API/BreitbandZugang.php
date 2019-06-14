<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BreitbandZugang
 * Informationen über die Breitbandmöglichkeiten.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("breitband_zugang") 
 */
class BreitbandZugang {

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $art;

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $speed;

	/**
	 * @return string
	 */
	public function getArt() {
		return $this->art;
	}

	/**
	 * @return float
	 */
	public function getSpeed() {
		return $this->speed;
	}

	/**
	 * @param string $art Setter for art
	 * @return BreitbandZugang
	 */
	public function setArt($art) {
		$this->art = $art;
		return $this;
	}

	/**
	 * @param float $speed Setter for speed
	 * @return BreitbandZugang
	 */
	public function setSpeed($speed) {
		$this->speed = $speed;
		return $this;
	}
}
