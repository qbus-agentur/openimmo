<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Daten
 * Anhangdaten
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("daten") 
 */
class Daten {

	/**
	 * Base64 encoded binary
	 *
	 * @Type("string") 
	 * @var string
	 */
	protected $anhanginhalt;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $pfad;

	/**
	 * @return string
	 */
	public function getAnhanginhalt() {
		return $this->anhanginhalt;
	}

	/**
	 * @return string
	 */
	public function getPfad() {
		return $this->pfad;
	}

	/**
	 * @param string $anhanginhalt Setter for anhanginhalt
	 * @return Daten
	 */
	public function setAnhanginhalt($anhanginhalt) {
		$this->anhanginhalt = $anhanginhalt;
		return $this;
	}

	/**
	 * @param string $pfad Setter for pfad
	 * @return Daten
	 */
	public function setPfad($pfad) {
		$this->pfad = $pfad;
		return $this;
	}
}
