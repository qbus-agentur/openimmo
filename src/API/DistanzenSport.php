<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class DistanzenSport
 * Welche Distanz zu dem ausgewählen Sport-/Freizeitziel besteht(Angabe in km), 
 *  Optionen nicht kombinierbar, Distanzelement ist mehrfach erfassbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("distanzen_sport") 
 */
class DistanzenSport {

	/**
	 */
	const DISTANZ_ZU_SPORT_MEER = 'MEER';

	/**
	 */
	const DISTANZ_ZU_SPORT_NAHERHOLUNG = 'NAHERHOLUNG';

	/**
	 */
	const DISTANZ_ZU_SPORT_SEE = 'SEE';

	/**
	 */
	const DISTANZ_ZU_SPORT_SKIGEBIET = 'SKIGEBIET';

	/**
	 */
	const DISTANZ_ZU_SPORT_SPORTANLAGEN = 'SPORTANLAGEN';

	/**
	 */
	const DISTANZ_ZU_SPORT_STRAND = 'STRAND';

	/**
	 */
	const DISTANZ_ZU_SPORT_WANDERGEBIETE = 'WANDERGEBIETE';

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see DISTANZ_ZU_SPORT_* constants
	 * @var string
	 */
	protected $distanzZuSport;

	/**
	 * @Inline 
	 * @Type("float") 
	 * @var float
	 */
	protected $value;

	/**
	 * @param string $distanzZuSport Shortcut setter for distanzZuSport
	 * @param float $value the actual value
	 */
	public function __construct($distanzZuSport = null, $value = null) {
		$this->distanzZuSport = $distanzZuSport;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getDistanzZuSport() {
		return $this->distanzZuSport;
	}

	/**
	 * @return float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param string $distanzZuSport Setter for distanzZuSport
	 * @return DistanzenSport
	 */
	public function setDistanzZuSport($distanzZuSport) {
		$this->distanzZuSport = $distanzZuSport;
		return $this;
	}

	/**
	 * @param float $value Setter for value
	 * @return DistanzenSport
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}
}
