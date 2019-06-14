<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Energiepass
 * Energiepass/Ausweis ab 7/2008 vorgeschrieben
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("energiepass") 
 */
class Energiepass {

	/**
	 */
	const EPART_BEDARF = 'BEDARF';

	/**
	 */
	const EPART_VERBRAUCH = 'VERBRAUCH';

	/**
	 */
	const GEBAEUDEART_NICHTWOHN = 'nichtwohn';

	/**
	 */
	const GEBAEUDEART_WOHN = 'wohn';

	/**
	 */
	const JAHRGANG_2008 = '2008';

	/**
	 */
	const JAHRGANG_2014 = '2014';

	/**
	 */
	const JAHRGANG_BEI_BESICHTIGUNG = 'bei_besichtigung';

	/**
	 */
	const JAHRGANG_NICHT_NOETIG = 'nicht_noetig';

	/**
	 */
	const JAHRGANG_OHNE = 'ohne';

	/**
	 * @Type("DateTime<'Y-m-d'>") 
	 * @var \DateTime
	 */
	protected $ausstelldatum;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $baujahr;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $endenergiebedarf;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $energieverbrauchkennwert;

	/**
	 * @Type("string") 
	 * @see EPART_* constants
	 * @var string
	 */
	protected $epart;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $epasstext;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $fgeeklasse;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $fgeewert;

	/**
	 * @Type("string") 
	 * @see GEBAEUDEART_* constants
	 * @var string
	 */
	protected $gebaeudeart;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $geg2018;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $gueltigBis;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $hwbklasse;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $hwbwert;

	/**
	 * @Type("string") 
	 * @see JAHRGANG_* constants
	 * @var string
	 */
	protected $jahrgang;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $mitwarmwasser;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $primaerenergietraeger;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $stromwert;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $waermewert;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $wertklasse;

	/**
	 * @return \DateTime
	 */
	public function getAusstelldatum() {
		return $this->ausstelldatum;
	}

	/**
	 * @return string
	 */
	public function getBaujahr() {
		return $this->baujahr;
	}

	/**
	 * @return string
	 */
	public function getEndenergiebedarf() {
		return $this->endenergiebedarf;
	}

	/**
	 * @return string
	 */
	public function getEnergieverbrauchkennwert() {
		return $this->energieverbrauchkennwert;
	}

	/**
	 * @return string
	 */
	public function getEpart() {
		return $this->epart;
	}

	/**
	 * @return string
	 */
	public function getEpasstext() {
		return $this->epasstext;
	}

	/**
	 * @return string
	 */
	public function getFgeeklasse() {
		return $this->fgeeklasse;
	}

	/**
	 * @return string
	 */
	public function getFgeewert() {
		return $this->fgeewert;
	}

	/**
	 * @return string
	 */
	public function getGebaeudeart() {
		return $this->gebaeudeart;
	}

	/**
	 * @return string
	 */
	public function getGeg2018() {
		return $this->geg2018;
	}

	/**
	 * @return string
	 */
	public function getGueltigBis() {
		return $this->gueltigBis;
	}

	/**
	 * @return string
	 */
	public function getHwbklasse() {
		return $this->hwbklasse;
	}

	/**
	 * @return string
	 */
	public function getHwbwert() {
		return $this->hwbwert;
	}

	/**
	 * @return string
	 */
	public function getJahrgang() {
		return $this->jahrgang;
	}

	/**
	 * @return boolean
	 */
	public function getMitwarmwasser() {
		return $this->mitwarmwasser;
	}

	/**
	 * @return string
	 */
	public function getPrimaerenergietraeger() {
		return $this->primaerenergietraeger;
	}

	/**
	 * @return string
	 */
	public function getStromwert() {
		return $this->stromwert;
	}

	/**
	 * @return string
	 */
	public function getWaermewert() {
		return $this->waermewert;
	}

	/**
	 * @return string
	 */
	public function getWertklasse() {
		return $this->wertklasse;
	}

	/**
	 * @param \DateTime $ausstelldatum Setter for ausstelldatum
	 * @return Energiepass
	 */
	public function setAusstelldatum(\DateTime $ausstelldatum) {
		$this->ausstelldatum = $ausstelldatum;
		return $this;
	}

	/**
	 * @param string $baujahr Setter for baujahr
	 * @return Energiepass
	 */
	public function setBaujahr($baujahr) {
		$this->baujahr = $baujahr;
		return $this;
	}

	/**
	 * @param string $endenergiebedarf Setter for endenergiebedarf
	 * @return Energiepass
	 */
	public function setEndenergiebedarf($endenergiebedarf) {
		$this->endenergiebedarf = $endenergiebedarf;
		return $this;
	}

	/**
	 * @param string $energieverbrauchkennwert Setter for energieverbrauchkennwert
	 * @return Energiepass
	 */
	public function setEnergieverbrauchkennwert($energieverbrauchkennwert) {
		$this->energieverbrauchkennwert = $energieverbrauchkennwert;
		return $this;
	}

	/**
	 * @param string $epart Setter for epart
	 * @return Energiepass
	 */
	public function setEpart($epart) {
		$this->epart = $epart;
		return $this;
	}

	/**
	 * @param string $epasstext Setter for epasstext
	 * @return Energiepass
	 */
	public function setEpasstext($epasstext) {
		$this->epasstext = $epasstext;
		return $this;
	}

	/**
	 * @param string $fgeeklasse Setter for fgeeklasse
	 * @return Energiepass
	 */
	public function setFgeeklasse($fgeeklasse) {
		$this->fgeeklasse = $fgeeklasse;
		return $this;
	}

	/**
	 * @param string $fgeewert Setter for fgeewert
	 * @return Energiepass
	 */
	public function setFgeewert($fgeewert) {
		$this->fgeewert = $fgeewert;
		return $this;
	}

	/**
	 * @param string $gebaeudeart Setter for gebaeudeart
	 * @return Energiepass
	 */
	public function setGebaeudeart($gebaeudeart) {
		$this->gebaeudeart = $gebaeudeart;
		return $this;
	}

	/**
	 * @param string $geg2018 Setter for geg2018
	 * @return Energiepass
	 */
	public function setGeg2018($geg2018) {
		$this->geg2018 = $geg2018;
		return $this;
	}

	/**
	 * @param string $gueltigBis Setter for gueltigBis
	 * @return Energiepass
	 */
	public function setGueltigBis($gueltigBis) {
		$this->gueltigBis = $gueltigBis;
		return $this;
	}

	/**
	 * @param string $hwbklasse Setter for hwbklasse
	 * @return Energiepass
	 */
	public function setHwbklasse($hwbklasse) {
		$this->hwbklasse = $hwbklasse;
		return $this;
	}

	/**
	 * @param string $hwbwert Setter for hwbwert
	 * @return Energiepass
	 */
	public function setHwbwert($hwbwert) {
		$this->hwbwert = $hwbwert;
		return $this;
	}

	/**
	 * @param string $jahrgang Setter for jahrgang
	 * @return Energiepass
	 */
	public function setJahrgang($jahrgang) {
		$this->jahrgang = $jahrgang;
		return $this;
	}

	/**
	 * @param boolean $mitwarmwasser Setter for mitwarmwasser
	 * @return Energiepass
	 */
	public function setMitwarmwasser($mitwarmwasser) {
		$this->mitwarmwasser = $mitwarmwasser;
		return $this;
	}

	/**
	 * @param string $primaerenergietraeger Setter for primaerenergietraeger
	 * @return Energiepass
	 */
	public function setPrimaerenergietraeger($primaerenergietraeger) {
		$this->primaerenergietraeger = $primaerenergietraeger;
		return $this;
	}

	/**
	 * @param string $stromwert Setter for stromwert
	 * @return Energiepass
	 */
	public function setStromwert($stromwert) {
		$this->stromwert = $stromwert;
		return $this;
	}

	/**
	 * @param string $waermewert Setter for waermewert
	 * @return Energiepass
	 */
	public function setWaermewert($waermewert) {
		$this->waermewert = $waermewert;
		return $this;
	}

	/**
	 * @param string $wertklasse Setter for wertklasse
	 * @return Energiepass
	 */
	public function setWertklasse($wertklasse) {
		$this->wertklasse = $wertklasse;
		return $this;
	}
}
