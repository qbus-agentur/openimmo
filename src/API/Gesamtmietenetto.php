<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Gesamtmietenetto
 * Summe alle Mietzins Zahlungen, UmSt. im Attribut.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("gesamtmietenetto") 
 */
class Gesamtmietenetto {

	/**
	 * optional
	 *
	 * @Type("float") 
	 * @XmlAttribute 
	 * @var float
	 */
	protected $gesamtmieteust;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param float $gesamtmieteust Shortcut setter for gesamtmieteust
	 * @param float $value the actual value
	 */
	public function __construct($gesamtmieteust = null, $value = null) {
		$this->gesamtmieteust = $gesamtmieteust;
		$this->value = $value;
	}

	/**
	 * @return float
	 */
	public function getGesamtmieteust() {
		return $this->gesamtmieteust;
	}

	/**
	 * @return float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float $gesamtmieteust Setter for gesamtmieteust
	 * @return Gesamtmietenetto
	 */
	public function setGesamtmieteust($gesamtmieteust) {
		$this->gesamtmieteust = $gesamtmieteust;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return Gesamtmietenetto
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
